<?php

namespace ComponentBundle\Entity\Translatable;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Model\Traits\ViewsTrait;
use ComponentBundle\Entity\Translation\AbstractEntityElementTranslationInterface;

/**
 * Class AbstractEntityElement
 * @ORM\MappedSuperclass
 * @package ComponentBundle\Entity\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractEntityElement extends AbstractBaseEntityTranslatable implements AbstractEntityElementInterface
{
    use ViewsTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        /**
         * @var AbstractEntityElementTranslationInterface $translate
         */
        $translate = $this->translate();

        return (string)$translate->getTitle();
    }
}
