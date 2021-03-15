<?php

namespace ComponentBundle\Entity\Translation;

use ComponentBundle\Dto\Traits\Id\ResourceInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface;

/**
 * Interface AbstractEntityTranslationInterface
 * @package ComponentBundle\Entity\Translation
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface AbstractEntityTranslationInterface extends ResourceInterface, TranslationInterface
{
}
