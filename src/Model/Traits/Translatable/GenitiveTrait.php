<?php

namespace ComponentBundle\Model\Traits\Translatable;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Translatable\Genitive\GenitiveMethodsTrait;

/**
 * Trait GenitiveTrait
 * @package ComponentBundle\Model\Traits\Translatable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait GenitiveTrait
{
    use GenitiveMethodsTrait;

    /**
     * @var string|null
     * @Assert\Length(max="255")
     * @ORM\Column(name="genitive", type="string", length=255, nullable=true)
     */
    protected ?string $genitive = null;
}
