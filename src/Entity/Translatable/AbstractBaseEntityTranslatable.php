<?php

namespace ComponentBundle\Entity\Translatable;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Class AbstractBaseEntityTranslatable
 * @ORM\MappedSuperclass
 * @package ComponentBundle\Entity\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractBaseEntityTranslatable implements AbstractBaseEntityTranslatableInterface
{
    use ORMBehaviors\Translatable\TranslatableTrait;
}
