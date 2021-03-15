<?php

namespace ComponentBundle\Entity\Translatable;

use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;

/**
 * Interface AbstractEntityTranslatableInterface
 * @package ComponentBundle\Entity\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractEntityTranslatableInterface extends
    TimestampableInterface,
    AbstractBaseEntityTranslatableInterface
{
}
