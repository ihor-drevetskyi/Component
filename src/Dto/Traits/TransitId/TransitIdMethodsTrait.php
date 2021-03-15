<?php

namespace ComponentBundle\Dto\Traits\TransitId;

/**
 * Trait TransitIdMethodsTrait
 * @package ComponentBundle\Dto\Traits\TransitId
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TransitIdMethodsTrait
{
    /**
     * @return int|null
     */
    public function getTransitId(): ?int
    {
        return $this->transitId;
    }

    /**
     * @param int|null $transit_id
     */
    public function setTransitId(?int $transit_id = null): void
    {
        $this->transitId = $transit_id;
    }
}
