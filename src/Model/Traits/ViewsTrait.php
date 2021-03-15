<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Views\ViewsMethodsTrait;

/**
 * Trait ViewsTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ViewsTrait
{
    use ViewsMethodsTrait;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @Assert\PositiveOrZero()
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    protected int $views = 0;
}
