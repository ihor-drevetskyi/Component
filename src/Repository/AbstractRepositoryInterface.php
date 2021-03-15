<?php

namespace ComponentBundle\Repository;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\OptimisticLockException;
use ComponentBundle\Dto\Traits\Id\ResourceInterface;

/**
 * Interface AbstractRepositoryInterface
 * @package ComponentBundle\Repository
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractRepositoryInterface
{
    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function flush(): void;

    /**
     * @param array $condition
     */
    public function addWhereCondition(array $condition): void;

    /**
     * @param ResourceInterface $resource
     * @throws ORMException
     */
    public function refresh(ResourceInterface $resource): void;

    /**
     * @return QueryBuilder
     */
    public function queryBuilderForFindElements(): QueryBuilder;

    /**
     * @param QueryBuilder $query_builder
     * @return Query
     */
    public function getQuery(QueryBuilder $query_builder): Query;

    /**
     * @param QueryBuilder $query_builder
     * @return QueryBuilder
     */
    public function getQueryBuilder(QueryBuilder $query_builder): QueryBuilder;

    /**
     * @param ResourceInterface $resource
     * @param bool $and_flush Whether to flush the changes (default true)
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ResourceInterface $resource, bool $and_flush = true): void;

    /**
     * @param ResourceInterface $resource
     * @param bool $and_flush Whether to flush the changes (default true)
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function persist(ResourceInterface $resource, bool $and_flush = true): void;
}
