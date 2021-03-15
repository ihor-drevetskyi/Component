<?php

namespace ComponentBundle\Dto\Traits\TransitId;

/**
 * Interface TransitIdMethodsInterface
 * @package ComponentBundle\Dto\Traits\TransitId
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface TransitIdMethodsInterface
{
    /**
     * @return int|null
     */
    public function getTransitId(): ?int;

    /**
     * @param int|null $transit_id
     */
    public function setTransitId(?int $transit_id = null): void;
}
