<?php

namespace ComponentBundle\Entity\Translatable;

use ComponentBundle\Dto\Traits\Id\ResourceInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;

/**
 * Interface AbstractBaseEntityTranslatableInterface
 * @package ComponentBundle\Entity\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractBaseEntityTranslatableInterface extends ResourceInterface, TranslatableInterface
{
}
