<?php

namespace ComponentBundle\Repository;

use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class AbstractElementRepository
 * @package ComponentBundle\Repository
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractElementRepository extends AbstractRepository implements AbstractElementRepositoryInterface
{
    /**
     * @var string
     */
    protected string $translation_alias;

    /**
     * AbstractElementRepository constructor.
     * @param ManagerRegistry $registry
     * @param RequestStack $request
     * @param string $class
     * @param string $translation_alias_class
     */
    public function __construct(
        ManagerRegistry $registry,
        RequestStack $request,
        string $class,
        string $translation_alias_class
    ) {
        parent::__construct($registry, $class, $request);
        $this->addDefaultRelationToSelect('translations');
        $this->translation_alias = $this->getEntityAlias($translation_alias_class);
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
        parent::addShowOnWebsiteWhereCondition($query_builder, $this->translation_alias, $value);
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
        parent::addLocaleWhereCondition($query_builder, $this->translation_alias, $locale);
    }

    /**
     * @param string|null $locale
     * @param bool $is_reset
     * @return QueryBuilder
     */
    public function getQueryBuilderForList(?string $locale = null, bool $is_reset = true): QueryBuilder
    {
        $construct_filter = $this->getConstructFilter();
        $construct_filter->setReset($is_reset);
        $construct_filter->setLocale($locale);
        $construct_filter->setUseLocaleCondition(true);
        $construct_filter->setUsePositionSort(true);
        $construct_filter->setUseShowOnWebsiteCondition(true);

        return $this->constructQueryBuilder($construct_filter);
    }

    /**
     * @param bool $is_reset
     * @param bool $use_get_query_builder
     * @return QueryBuilder
     */
    public function getQueryBuilderForElement(
        bool $is_reset = true,
        bool $use_get_query_builder = true
    ): QueryBuilder
    {
        $construct_filter = $this->getConstructFilter();
        $construct_filter->setReset($is_reset);
        $construct_filter->addRelationToSelect('seo');
        $construct_filter->addRelationToSelect(['translations' => 'seo']);
        $construct_filter->setUseGetQueryBuilder($use_get_query_builder);
        $construct_filter->setUseShowOnWebsiteCondition(true);

        return $this->constructQueryBuilder($construct_filter);
    }

    /**
     * @param array $ids
     * @param string $field
     * @param string|null $index_field
     * @return array
     */
    public function findElementsByIdsIndexById(
        array $ids,
        string $field = 'id',
        ?string $index_field = 'id'
    ): array
    {
        if (empty($ids)) {
            return [];
        }

        $construct_filter = $this->getConstructFilter();
        $construct_filter->setInWhereConditionIds($ids);
        $construct_filter->setInWhereConditionField($field);
        $construct_filter->setUseGetQueryBuilder(false);
        $construct_filter->setUseInWhereCondition(true);
        $construct_filter->setIndexBy($this->getEntityAlias(), $index_field);

        return $this->getResult($this->constructQueryBuilder($construct_filter));
    }

    /**
     * @param $id
     * @return object|null
     */
    public function findElementByIdForDashboardEditOrDeleteFormAction($id): ?object
    {
        $construct_filter = $this->getConstructFilter();
        $construct_filter->addRelationToSelect('seo');
        $construct_filter->addRelationToSelect(['translations' => 'seo']);
        $construct_filter->setId($id);
        $construct_filter->setUseGetQueryBuilder(false);

        return $this->getOneOrNullResult($this->constructQueryBuilder($construct_filter));
    }
}
