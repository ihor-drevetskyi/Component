<?php

namespace ComponentBundle\Dto\Traits\TransitId;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait TransitIdTrait
 * @package ComponentBundle\Dto\Traits\TransitId
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TransitIdTrait
{
    use TransitIdMethodsTrait;

    /**
     * @var string|null
     * @Assert\Length(max="255")
     */
    protected ?string $transitId = null;
}
