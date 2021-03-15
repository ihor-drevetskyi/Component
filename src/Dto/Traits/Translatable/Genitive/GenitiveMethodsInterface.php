<?php

namespace ComponentBundle\Dto\Traits\Translatable\Genitive;

/**
 * Interface GenitiveMethodsInterface
 * @package ComponentBundle\Dto\Traits\Translatable\Genitive
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface GenitiveMethodsInterface
{
    /**
     * @return null|string
     */
    public function getGenitive(): ?string;

    /**
     * @param string|null $genitive
     */
    public function setGenitive(?string $genitive = null): void;
}
