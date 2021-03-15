<?php

namespace ComponentBundle\Dto\Traits\Translatable\ShortDescription;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait ShortDescriptionMethodsTrait
 * @package ComponentBundle\Dto\Traits\Translatable\ShortDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShortDescriptionMethodsTrait
{
    /**
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * @param string|null $short_description
     */
    public function setShortDescription(?string $short_description): void
    {
        $this->shortDescription = AbstractPrepareTextHelper::prepareText($short_description);
    }

    /**
     * @return string|null
     */
    public function getShortDescriptionStripped(): ?string
    {
        return AbstractPrepareTextHelper::stripped($this->getShortDescription());
    }
}
