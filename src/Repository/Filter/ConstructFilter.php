<?php

namespace ComponentBundle\Repository\Filter;

use Doctrine\Common\Collections\Criteria;
use ComponentBundle\Dto\Traits\Id\IdTrait;
use ComponentBundle\Dto\Traits\SystemName\SystemNameTrait;

/**
 * Class ConstructFilter
 * @package ComponentBundle\Repository\Filter
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class ConstructFilter extends AbstractConstructFilter implements ConstructFilterInterface
{
    use IdTrait;
    use SystemNameTrait;

    /**
     * @var int|null
     */
    protected ?int $offset = null;

    /**
     * @var bool
     */
    protected bool $reset = true;

    /**
     * @var string|null
     */
    protected ?string $sort_by = null;

    /**
     * @var string|null
     */
    protected ?string $index_by = null;

    /**
     * @var string|null
     */
    protected ?string $index_field = null;

    /**
     * @var array|string[]
     */
    protected array $extra_relations = [];

    /**
     * @var string|null
     */
    protected ?string $sort_direction = null;

    /**
     * @var bool
     */
    protected bool $use_get_query_builder = true;

    /**
     * @var bool
     */
    protected bool $use_in_where_condition = false;

    /**
     * @var array|null
     */
    protected ?array $in_where_condition_ids = null;

    /**
     * @var string|null
     */
    protected ?string $in_where_condition_field = null;

    /**
     * @return bool
     */
    public function isReset(): bool
    {
        return $this->reset;
    }

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @return string|null
     */
    public function getSortBy(): ?string
    {
        return $this->sort_by;
    }

    /**
     * @return string|null
     */
    public function getIndexBy(): ?string
    {
        return $this->index_by;
    }

    /**
     * @return string|null
     */
    public function getIndexField(): ?string
    {
        return $this->index_field;
    }

    /**
     * @return array|string[]
     */
    public function getExtraRelations(): array
    {
        return $this->extra_relations;
    }

    /**
     * @return string|null
     */
    public function getSortDirection(): ?string
    {
        return $this->sort_direction;
    }

    /**
     * @param bool $reset
     */
    public function setReset(bool $reset): void
    {
        $this->reset = $reset;
    }

    /**
     * @return bool
     */
    public function isUseGetQueryBuilder(): bool
    {
        return $this->use_get_query_builder;
    }

    /**
     * @return bool
     */
    public function isUseInWhereCondition(): bool
    {
        return $this->use_in_where_condition;
    }

    /**
     * @param int|null $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return array|null
     */
    public function getInWhereConditionIds(): ?array
    {
        return $this->in_where_condition_ids;
    }

    /**
     * @return string|null
     */
    public function getInWhereConditionField(): ?string
    {
        return $this->in_where_condition_field;
    }

    /**
     * string or array
     * 'seo'
     * ['translations' => 'seo']
     * @param $relation
     */
    public function addRelationToSelect($relation): void
    {
        if (
            (is_string($relation) || is_array($relation)) &&
            !in_array($relation, $this->extra_relations)
        ) {
            $this->extra_relations[] = $relation;
        }
    }

    /**
     * @param string $index_by
     * @param string|null $index_field
     */
    public function setIndexBy(string $index_by, ?string $index_field): void
    {
        $this->index_by = $index_by;
        $this->index_field = $index_field;
    }

    /**
     * @param bool $use_get_query_builder
     */
    public function setUseGetQueryBuilder(bool $use_get_query_builder): void
    {
        $this->use_get_query_builder = $use_get_query_builder;
    }

    /**
     * @param bool $use_in_where_condition
     */
    public function setUseInWhereCondition(bool $use_in_where_condition): void
    {
        $this->use_in_where_condition = $use_in_where_condition;
    }

    /**
     * @param array|null $in_where_condition_ids
     */
    public function setInWhereConditionIds(?array $in_where_condition_ids): void
    {
        $this->in_where_condition_ids = array_values($in_where_condition_ids);
    }

    /**
     * @param string|null $in_where_condition_field
     */
    public function setInWhereConditionField(?string $in_where_condition_field): void
    {
        $this->in_where_condition_field = $in_where_condition_field;
    }

    /**
     * @param string $sort_by
     * @param string $sort_direction
     * @param string $criteria
     */
    public function setSortBy(string $sort_by, string $sort_direction, string $criteria = Criteria::DESC): void
    {
        if ($sort_by && $sort_direction) {
            $this->sort_by = $sort_by . '.' . $sort_direction;
        }

        if ($criteria == Criteria::ASC || $criteria == Criteria::DESC) {
            $this->sort_direction = $criteria;
        }
    }
}
