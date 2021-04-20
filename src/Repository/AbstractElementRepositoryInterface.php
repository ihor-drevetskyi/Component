<?php

namespace ComponentBundle\Repository;

use Doctrine\ORM\QueryBuilder;

/**
 * Interface AbstractElementRepositoryInterface
 * @package ComponentBundle\Repository
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractElementRepositoryInterface extends AbstractRepositoryInterface
{
    /**
     * @param array $ids
     * @return array
     */
    public function findElementsByIdsIndexById(array $ids): array;

    /**
     * @param bool $is_reset
     * @return QueryBuilder
     */
    public function getQueryBuilderForElement(bool $is_reset = true): QueryBuilder;

    /**
     * @param $id
     * @return object|null
     */
    public function findElementByIdForDashboardEditOrDeleteFormAction($id): ?object;

    /**
     * @param string|null $locale
     * @param bool $is_reset
     * @return QueryBuilder
     */
    public function getQueryBuilderForList(?string $locale = null, bool $is_reset = true): QueryBuilder;
}
