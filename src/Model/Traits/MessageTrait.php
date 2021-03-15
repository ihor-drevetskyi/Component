<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Message\MessageMethodsTrait;

/**
 * Trait MessageTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MessageTrait
{
    use MessageMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    protected ?string $message = null;
}
