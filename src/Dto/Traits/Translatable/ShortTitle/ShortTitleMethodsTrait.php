<?php

namespace ComponentBundle\Dto\Traits\Translatable\ShortTitle;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait ShortTitleMethodsTrait
 * @package ComponentBundle\Dto\Traits\Translatable\ShortTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ShortTitleMethodsTrait
{
    /**
     * @return null|string
     */
    public function getShortTitle(): ?string
    {
        return $this->shortTitle;
    }

    /**
     * @param string|null $short_title
     */
    public function setShortTitle(?string $short_title = null): void
    {
        $this->shortTitle = AbstractPrepareTextHelper::prepareText($short_title);
    }
}
