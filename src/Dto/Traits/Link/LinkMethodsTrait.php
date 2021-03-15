<?php

namespace ComponentBundle\Dto\Traits\Link;

/**
 * Trait LinkMethodsTrait
 * @package ComponentBundle\Dto\Traits\Link
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LinkMethodsTrait
{
    /**
     * @return null|string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param null|string $link
     */
    public function setLink(?string $link = null): void
    {
        $this->link = $link;
    }
}
