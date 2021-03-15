<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\SystemName\SystemNameMethodsTrait;

/**
 * Trait SystemNameTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SystemNameTrait
{
    use SystemNameMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     * @ORM\Column(name="system_name", type="string", length=255, nullable=false, unique=true)
     */
    protected ?string $systemName = null;
}
