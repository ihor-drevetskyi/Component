<?php

namespace ComponentBundle\Dto\Traits\Message;

/**
 * Trait MessageTrait
 * @package ComponentBundle\Dto\Traits\Message
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MessageTrait
{
    use MessageMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $message = null;
}
