<?php

namespace ComponentBundle\Entity\Translation;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use ComponentBundle\Model\Traits\Id\IdAutoTrait;

/**
 * Class AbstractEntityTranslation
 * @ORM\MappedSuperclass
 * @package ComponentBundle\Entity\Translation
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractEntityTranslation implements AbstractEntityTranslationInterface
{
    use IdAutoTrait;
    use ORMBehaviors\Translatable\TranslationTrait;
}
