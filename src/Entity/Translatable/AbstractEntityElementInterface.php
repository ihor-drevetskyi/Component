<?php

namespace ComponentBundle\Entity\Translatable;

use ComponentBundle\Dto\Traits\Views\ViewsMethodsInterface;

/**
 * Interface AbstractEntityElementInterface
 * @package ComponentBundle\Entity\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractEntityElementInterface extends
    ViewsMethodsInterface,
    AbstractBaseEntityTranslatableInterface
{
}
