<?php

namespace ComponentBundle\Dto\Traits\Link;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait LinkTrait
 * @package ComponentBundle\Dto\Traits\Link
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LinkTrait
{
    use LinkMethodsTrait;

    /**
     * @var string|null
     * @Assert\Url()
     */
    protected ?string $link = null;
}
