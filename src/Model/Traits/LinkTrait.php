<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Link\LinkMethodsTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait LinkTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LinkTrait
{
    use LinkMethodsTrait;

    /**
     * @var string|null
     * @Assert\Url()
     * @ORM\Column(name="link", type="text", nullable=true)
     */
    protected ?string $link = null;
}
