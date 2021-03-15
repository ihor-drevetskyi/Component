<?php

namespace ComponentBundle\Dto\Traits\User\Name;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait NameTrait
 * @package ComponentBundle\Dto\Traits\User\Name
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait NameTrait
{
    use NameMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     */
    protected ?string $name = null;
}
