<?php

namespace ComponentBundle\Dto\Traits\Link;

/**
 * Interface LinkMethodsInterface
 * @package ComponentBundle\Dto\Traits\Link
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface LinkMethodsInterface
{
    /**
     * @return null|string
     */
    public function getLink(): ?string;

    /**
     * @param null|string $link
     */
    public function setLink(?string $link = null): void;
}
