<?php

namespace ComponentBundle\Dto\Traits\Id;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait IdTrait
 * @package ComponentBundle\Dto\Traits\Id
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait IdTrait
{
    use IdMethodsTrait;

    /**
     * @var int|null
     * @Assert\NotBlank()
     */
    protected ?int $id = null;
}
