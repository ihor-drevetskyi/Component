<?php

namespace ComponentBundle\Repository;

use DateTime;
use Doctrine\ORM\Query;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\QueryException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Mapping\MappingException;
use Symfony\Component\HttpFoundation\Request;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use ComponentBundle\Dto\Traits\Id\ResourceInterface;
use ComponentBundle\Repository\Filter\ConstructFilter;
use ComponentBundle\Repository\Filter\ConstructFilterInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

/**
 * Class AbstractRepository
 * @package ComponentBundle\Repository
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractRepository extends ServiceEntityRepository implements AbstractRepositoryInterface
{
    /**
     * @var Request|null
     */
    protected ?Request $request = null;

    /**
     * @var ManagerRegistry
     */
    protected ManagerRegistry $registry;

    /**
     * @var array|string[]
     */
    protected array $extra_relations = [];

    /**
     * @var array|string[]
     */
    protected array $where_conditions = [];

    /**
     * @var array|string[]
     */
    protected array $default_relations = [];

    /**
     * AbstractRepository constructor.
     * @param ManagerRegistry $registry
     * @param string $class
     * @param RequestStack|null $request
     */
    public function __construct(ManagerRegistry $registry, string $class, RequestStack $request = null)
    {
        $this->registry = $registry;
        parent::__construct($registry, $class);
        if ($request) {
            $this->request = $request->getCurrentRequest();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function flush(): void
    {
        $this->_em->flush();
    }

    /**
     *
     */
    protected function reset(): void
    {
        $this->resetWhereConditions();
        $this->extra_relations = [];
    }

    /**
     *
     */
    public function resetWhereConditions(): void
    {
        $this->where_conditions = [];
    }

    /**
     * @param QueryBuilder $query_builder
     * @param string|null $alias
     * @param string|null $locale
     */
    protected function addLocaleWhereCondition(
        QueryBuilder $query_builder,
        ?string $alias = null,
        ?string $locale = null
    ): void {
        if (!($this->request instanceof Request) && !$locale) {
            return;
        }

        if (!$alias) {
            $alias = $this->getEntityAlias();
        }

        if (!$locale) {
            $locale = $this->request->getLocale();
        }

        $this->addWhereCondition([
            $query_builder->expr()->eq($alias . '.locale', ':locale')
        ]);
        $query_builder->setParameter('locale', $locale);
    }

    /**
     * @param QueryBuilder $query_builder
     * @param string|null $alias
     * @param bool $value
     */
    protected function addShowOnWebsiteWhereCondition(
        QueryBuilder $query_builder,
        ?string $alias = null,
        bool $value = YesOrNoInterface::YES
    ): void {
        if (!$alias) {
            $alias = $this->getEntityAlias();
        }

        $this->addWhereCondition([
            $query_builder->expr()->eq($alias . '.showOnWebsite', ':showOnWebsite')
        ]);
        $query_builder->setParameter('showOnWebsite', $value);
    }

    /**
     * @return array
     */
    protected function getRelations(): array
    {
        return array_merge(array_unique($this->default_relations), $this->extra_relations);
    }

    /**
     * string or array
     * 'seo'
     * ['translations' => 'seo']
     * @param $relation
     */
    protected function addRelationToSelect($relation): void
    {
        if (
            (is_string($relation) || is_array($relation)) &&
            !in_array($relation, $this->extra_relations)
        ) {
            $this->extra_relations[] = $relation;
        }
    }

    /**
     * Общая часть запроса для всех других запросов
     * @return QueryBuilder
     */
    protected function createQuery(): QueryBuilder
    {
        $query_builder = $this->createQueryBuilder($this->getEntityAlias());
        $query_builder->select($this->getEntityAlias());
        $this->joinRelations($query_builder);

        return $query_builder;
    }

    /**
     * @return array|string[]
     */
    protected function getWhereConditions(): array
    {
        return $this->where_conditions;
    }

    /**
     * @param string $class_name
     * @return string
     * @throws MappingException
     */
    protected function getAlias(string $class_name): string
    {
        $class_name = $this->getEntityAlias($class_name);
        $metadata = $this->getClassMetadata();
        $mapping = $metadata->getAssociationMapping($class_name);

        return $this->getEntityAlias($mapping['targetEntity']);
    }

    /**
     * @param array $relations
     */
    protected function setRelations(array $relations): void
    {
        $this->extra_relations = $relations;
    }

    /**
     * @param array $condition
     */
    public function addWhereCondition(array $condition): void
    {
        $this->where_conditions = array_merge($this->where_conditions, $condition);
    }

    /**
     * @param ResourceInterface $resource
     * @throws ORMException
     */
    public function refresh(ResourceInterface $resource): void
    {
        $this->_em->refresh($resource);
    }

    /**
     * @return QueryBuilder
     */
    public function queryBuilderForFindElements(): QueryBuilder
    {
        $construct_filter = $this->getConstructFilter();
        $construct_filter->setIndexBy($this->getEntityAlias(), 'id');

        return $this->constructQueryBuilder($construct_filter);
    }

    /**
     * @param QueryBuilder $query_builder
     * @return Query
     */
    public function getQuery(QueryBuilder $query_builder): Query
    {
        return $this->getQueryBuilder($query_builder)->getQuery();
    }

    /**
     * string or array
     * 'seo'
     * ['translations' => 'seo']
     * @param $relation
     */
    protected function addDefaultRelationToSelect($relation): void
    {
        if (is_string($relation) || is_array($relation) && !in_array($relation, $this->default_relations)) {
            $this->default_relations[] = $relation;
        }
    }

    /**
     * @param QueryBuilder $query_builder
     * @return array
     */
    protected function getResult(QueryBuilder $query_builder): array
    {
        $results = $this->getQuery($query_builder)->getResult();
        $this->reset();

        return $results;
    }

    /**
     * @return ConstructFilterInterface
     */
    protected function getConstructFilter(): ConstructFilterInterface
    {
        return new ConstructFilter();
    }

    /**
     * @param QueryBuilder $query_builder
     */
    protected function addExpression(QueryBuilder $query_builder): void
    {
        foreach ($this->getWhereConditions() as $where_condition) {
            $query_builder->andWhere($where_condition);
        }
    }

    /**
     * @param QueryBuilder $query_builder
     */
    protected function joinRelations(QueryBuilder $query_builder): void
    {
        $aliases = $query_builder->getRootAliases();

        if (isset($aliases[0])) {
            foreach ($this->getRelations() as $relation) {
                $alias = $aliases[0];
                $metadata = $this->getClassMetadata();

                try {
                    if (is_string($relation)) {
                        $mapping = $metadata->getAssociationMapping($relation);
                        $relation_alias = $this->getEntityAlias($mapping['targetEntity']);
                        if (in_array($relation_alias, $query_builder->getAllAliases())) {
                            $relation_alias = $relation_alias . '_' . $mapping['fieldName'];
                        }
                        $query_builder
                            ->addSelect($relation_alias)
                            ->leftJoin($alias . '.' . $mapping['fieldName'], $relation_alias);
                    } elseif (is_array($relation)) {
                        foreach ($relation as $key => $item) {
                            $mapping = $metadata->getAssociationMapping($item);
                            $manager = $this->registry->getManagerForClass($mapping['targetEntity']);
                            $metadata = $manager->getClassMetadata($mapping['targetEntity']);
                            $mapping = $metadata->getAssociationMapping($key);
                            $relation_alias = $this->getEntityAlias($mapping['targetEntity']);

                            if (in_array($relation_alias, $query_builder->getAllAliases())) {
                                $relation_alias = $relation_alias . '_' . $item . '_' . $mapping['fieldName'];
                            }

                            $children_alias = $this->getAlias($item);

                            $temp_children_alias = $this->getAlias($item) . '_' . $item;
                            if (in_array($temp_children_alias, $query_builder->getAllAliases())) {
                                $children_alias = $temp_children_alias;
                            }

                            $query_builder
                                ->addSelect($relation_alias)
                                ->leftJoin($children_alias . '.' . $mapping['fieldName'], $relation_alias);
                        }
                    }
                } catch (MappingException $e) {
                }
            }
        }
    }

    /**
     * @param string|null $class_name
     * @return string
     */
    protected function getEntityAlias(?string $class_name = null): string
    {
        if (!$class_name) {
            $class_name = $this->_entityName;
        }

        $normalizer = new CamelCaseToSnakeCaseNameConverter();

        if (strpos($class_name, '\\')) {
            $parts = explode('\\', $class_name);
            $class_name = end($parts);
        }

        return $normalizer->normalize($class_name);
    }

    /**
     * @param $construct_filter
     * @return QueryBuilder
     */
    protected function constructQueryBuilder($construct_filter): QueryBuilder
    {
        $helper = $this->helperForConstructQueryBuilder($construct_filter);
        $construct_filter = $helper['filter_dto'];
        $query_builder = $helper['query_builder'];

        if ($construct_filter->isUseGetQueryBuilder()) {
            return $this->getQueryBuilder($query_builder);
        } else {
            return $query_builder;
        }
    }

    /**
     * @param QueryBuilder $query_builder
     * @return QueryBuilder
     */
    public function getQueryBuilder(QueryBuilder $query_builder): QueryBuilder
    {
        $this->addExpression($query_builder);

        return $query_builder;
    }

    /**
     * @param QueryBuilder $query_builder
     * @param bool $use_cache
     * @param int $lifetime
     * @return object|null
     */
    protected function getOneOrNullResult(
        QueryBuilder $query_builder,
        bool $use_cache = false,
        int $lifetime = 3600
    ): ?object
    {
        try {
            $query = $this->getQuery($query_builder);
            if ($use_cache) {
                $query->setCacheable(true);
                $query->enableResultCache($lifetime);
            }

            $result = $query->getOneOrNullResult();
            $this->reset();

            return $result;
        } catch (NonUniqueResultException $e) {
            return null;
        }
    }

    /**
     * @param QueryBuilder $query_builder
     * @param int $id
     */
    protected function addIdWhereCondition(QueryBuilder $query_builder, int $id)
    {
        $this->addWhereCondition([
            $query_builder->expr()->eq($this->getEntityAlias() . '.id', ':id')
        ]);
        $query_builder->setParameter('id', $id);
    }

    /**
     * @param ResourceInterface $resource
     * @param bool $and_flush Whether to flush the changes (default true)
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function persist(ResourceInterface $resource, bool $and_flush = true): void
    {
        $this->_em->persist($resource);
        if ($and_flush) {
            $this->_em->flush();
        }
    }

    /**
     * @param ResourceInterface $resource
     * @param bool $and_flush Whether to flush the changes (default true)
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ResourceInterface $resource, bool $and_flush = true): void
    {
        $this->_em->remove($resource);
        if ($and_flush) {
            $this->_em->flush();
        }
    }
    
    /**
     * @param ConstructFilterInterface $construct_filter
     * @return array
     */
    protected function helperForConstructQueryBuilder(ConstructFilterInterface $construct_filter): array
    {
        if ($construct_filter->isReset()) {
            $this->reset();
        }

        $this->setRelations($construct_filter->getExtraRelations());

        $query_builder = $this->createQuery();

        $id = $construct_filter->getId();
        if ($id) {
            $this->addIdWhereCondition($query_builder, $id);
        }

        if ($construct_filter->isUseLocaleCondition()) {
            $this->addLocaleWhereCondition($query_builder, null, $construct_filter->getLocale());
        }

        if ($construct_filter->isUseShowOnWebsiteCondition()) {
            $this->addShowOnWebsiteWhereCondition($query_builder);
        }

        $system_name = $construct_filter->getSystemName();
        if ($system_name) {
            $this->addWhereCondition([
                $query_builder->expr()->eq($this->getEntityAlias() . '.systemName', ':system_name')
            ]);
            $query_builder->setParameter('system_name', $system_name);
        }

        if ($construct_filter->isUseInWhereCondition()) {
            $ids = $construct_filter->getInWhereConditionIds();
            $field = $construct_filter->getInWhereConditionField();

            if ($ids && $field) {
                $this->addWhereCondition([
                    $query_builder->expr()->in($this->getEntityAlias() . '.' . $field, $ids)
                ]);
            }
        }

        if ($construct_filter->isUsePositionSort()) {
            $construct_filter->setSortBy($this->getEntityAlias(), 'position');
        } elseif ($construct_filter->isUsePublishAtSort()) {
            $construct_filter->setSortBy($this->getEntityAlias(), 'publishAt');
        }

        if ($construct_filter->isUsePublishAtCondition()) {
            $this->addWhereCondition([
                $query_builder->expr()->lte($this->getEntityAlias() . '.publishAt', ':current_date')
            ]);
            $query_builder->setParameter('current_date', new DateTime());
        }

        $this->indexBy($query_builder, $construct_filter);
        $this->orderBy($query_builder, $construct_filter);

        return [
            'filter_dto' => $construct_filter,
            'query_builder' => $query_builder
        ];
    }

    /**
     * @param QueryBuilder $query_builder
     * @param ConstructFilterInterface $construct_filter
     */
    protected function indexBy(QueryBuilder $query_builder, ConstructFilterInterface $construct_filter): void
    {
        try {
            $index_by = $construct_filter->getIndexBy();
            $index_field = $construct_filter->getIndexField();
            if ($index_by && $index_field) {
                $query_builder->indexBy($index_by, $index_by . '.' . $index_field);
            }
        } catch (QueryException $e) {
        }
    }

    /**
     * @param QueryBuilder $query_builder
     * @param ConstructFilterInterface $construct_filter
     */
    protected function orderBy(QueryBuilder $query_builder, ConstructFilterInterface $construct_filter): void
    {
        $sort_by = $construct_filter->getSortBy();
        $sort_direction = $construct_filter->getSortDirection();
        if ($sort_by && $sort_direction) {
            $query_builder->orderBy($sort_by, $sort_direction);
        }
    }
}
