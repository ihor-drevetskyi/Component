<?php

namespace ComponentBundle\Entity\Translation;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Model\Traits\Translatable\TitleTrait;
use ComponentBundle\Model\Traits\Active\ShowOnWebsiteTrait;
use ComponentBundle\Model\Traits\Translatable\DescriptionTrait;
use ComponentBundle\Model\Traits\Translatable\ShortDescriptionTrait;

/**
 * Class AbstractEntityElementTranslation
 * @ORM\MappedSuperclass
 * @package ComponentBundle\Entity\Translation
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractEntityElementTranslation extends AbstractEntityTranslation implements
    AbstractEntityElementTranslationInterface
{
    use TitleTrait;
    use ShortDescriptionTrait;
    use DescriptionTrait;
    use ShowOnWebsiteTrait;
}
