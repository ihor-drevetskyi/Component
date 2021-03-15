<?php

namespace ComponentBundle\Repository\Filter;

use Doctrine\Common\Collections\Criteria;
use ComponentBundle\Dto\Traits\Id\IdMethodsInterface;
use ComponentBundle\Dto\Traits\SystemName\SystemNameMethodsInterface;

/**
 * Interface ConstructFilterInterface
 * @package ComponentBundle\Repository\Filter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ConstructFilterInterface extends
    IdMethodsInterface,
    SystemNameMethodsInterface,
    AbstractConstructFilterInterface
{
    /**
     * @return bool
     */
    public function isReset(): bool;

    /**
     * @return int|null
     */
    public function getOffset(): ?int;

    /**
     * @return string|null
     */
    public function getSortBy(): ?string;

    /**
     * @return string|null
     */
    public function getIndexBy(): ?string;

    /**
     * @return string|null
     */
    public function getIndexField(): ?string;

    /**
     * @return array|string[]
     */
    public function getExtraRelations(): array;

    /**
     * @return string|null
     */
    public function getSortDirection(): ?string;

    /**
     * @param bool $reset
     */
    public function setReset(bool $reset): void;

    /**
     * @return bool
     */
    public function isUseGetQueryBuilder(): bool;

    /**
     * @return bool
     */
    public function isUseInWhereCondition(): bool;

    /**
     * @param int|null $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @return array|null
     */
    public function getInWhereConditionIds(): ?array;

    /**
     * @return string|null
     */
    public function getInWhereConditionField(): ?string;

    /**
     * string or array
     * 'seo'
     * ['translations' => 'seo']
     * @param $relation
     */
    public function addRelationToSelect($relation): void;

    /**
     * @param string $index_by
     * @param string|null $index_field
     */
    public function setIndexBy(string $index_by, ?string $index_field): void;

    /**
     * @param bool $use_get_query_builder
     */
    public function setUseGetQueryBuilder(bool $use_get_query_builder): void;

    /**
     * @param bool $use_in_where_condition
     */
    public function setUseInWhereCondition(bool $use_in_where_condition): void;

    /**
     * @param array|null $in_where_condition_ids
     */
    public function setInWhereConditionIds(?array $in_where_condition_ids): void;

    /**
     * @param string|null $in_where_condition_field
     */
    public function setInWhereConditionField(?string $in_where_condition_field): void;

    /**
     * @param string $sort_by
     * @param string $sort_direction
     * @param string $criteria
     */
    public function setSortBy(string $sort_by, string $sort_direction, string $criteria = Criteria::DESC): void;
}
