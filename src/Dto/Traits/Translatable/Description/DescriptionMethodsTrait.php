<?php

namespace ComponentBundle\Dto\Traits\Translatable\Description;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait DescriptionMethodsTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Description
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DescriptionMethodsTrait
{
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description = null): void
    {
        $this->description = AbstractPrepareTextHelper::prepareText($description);
    }

    /**
     * @return string|null
     */
    public function getDescriptionStripped(): ?string
    {
        return AbstractPrepareTextHelper::stripped($this->getDescription());
    }
}
