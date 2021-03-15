<?php

namespace ComponentBundle\Dto\Traits\Translatable\Genitive;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait GenitiveMethodsTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Genitive
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait GenitiveMethodsTrait
{
    /**
     * @return string|null
     */
    public function getGenitive(): ?string
    {
        return $this->genitive;
    }

    /**
     * @param string|null $genitive
     */
    public function setGenitive(?string $genitive = null): void
    {
        $this->genitive = AbstractPrepareTextHelper::prepareText($genitive);
    }
}
