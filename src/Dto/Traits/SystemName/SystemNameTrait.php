<?php

namespace ComponentBundle\Dto\Traits\SystemName;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SystemNameTrait
 * @package ComponentBundle\Dto\Traits\SystemName
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SystemNameTrait
{
    use SystemNameMethodsTrait;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     */
    protected ?string $systemName = null;
}
