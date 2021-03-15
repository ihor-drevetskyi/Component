<?php

namespace ComponentBundle\Dto\Traits\Translatable\Genitive;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait GenitiveTrait
 * @package ComponentBundle\Dto\Traits\Translatable\Genitive
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait GenitiveTrait
{
    use GenitiveMethodsTrait;

    /**
     * @var string|null
     * @Assert\Length(max="255")
     */
    protected ?string $genitive = null;
}
