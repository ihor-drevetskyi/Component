<?php

namespace ComponentBundle\Entity\Translation;

use ComponentBundle\Dto\Traits\Translatable\Slug\SlugMethodsInterface;
use ComponentBundle\Dto\Traits\Translatable\Title\TitleMethodsInterface;
use ComponentBundle\Dto\Traits\Active\ShowOnWebsite\ShowOnWebsiteMethodsInterface;
use ComponentBundle\Dto\Traits\Translatable\Description\DescriptionMethodsInterface;
use ComponentBundle\Dto\Traits\Translatable\ShortDescription\ShortDescriptionMethodsInterface;

/**
 * Interface AbstractEntityElementTranslationInterface
 * @package ComponentBundle\Entity\Translation
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractEntityElementTranslationInterface extends
    SlugMethodsInterface,
    TitleMethodsInterface,
    DescriptionMethodsInterface,
    ShowOnWebsiteMethodsInterface,
    ShortDescriptionMethodsInterface,
    AbstractEntityTranslationInterface
{
}
