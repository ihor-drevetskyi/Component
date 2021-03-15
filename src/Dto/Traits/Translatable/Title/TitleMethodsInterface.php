<?php

namespace ComponentBundle\Dto\Traits\Translatable\Title;

/**
 * Interface TitleMethodsInterface
 * @package ComponentBundle\Dto\Traits\Translatable\Title
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface TitleMethodsInterface
{
    /**
     * @return null|string
     */
    public function getTitle(): ?string;

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title = null): void;
}
