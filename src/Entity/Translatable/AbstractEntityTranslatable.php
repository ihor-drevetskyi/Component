<?php

namespace ComponentBundle\Entity\Translatable;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Class AbstractEntityTranslatable
 * @ORM\MappedSuperclass
 * @package ComponentBundle\Entity\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractEntityTranslatable extends AbstractBaseEntityTranslatable implements
    AbstractEntityTranslatableInterface
{
    use ORMBehaviors\Timestampable\TimestampableTrait;
}
