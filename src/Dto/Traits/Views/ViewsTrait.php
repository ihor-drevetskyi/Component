<?php

namespace ComponentBundle\Dto\Traits\Views;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait ViewsTrait
 * @package ComponentBundle\Dto\Traits\Views
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ViewsTrait
{
    use ViewsMethodsTrait;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @Assert\PositiveOrZero()
     */
    protected int $views = 0;
}
