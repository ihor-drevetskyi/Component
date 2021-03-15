<?php

namespace ComponentBundle\Dto\Traits\Translatable\Title;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait TitleMethodsTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Title
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TitleMethodsTrait
{
    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title = null): void
    {
        $this->title = AbstractPrepareTextHelper::prepareText($title);
    }
}
