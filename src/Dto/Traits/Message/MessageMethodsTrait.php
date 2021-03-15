<?php

namespace ComponentBundle\Dto\Traits\Message;

/**
 * Trait MessageMethodsTrait
 * @package ComponentBundle\Dto\Traits\Message
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MessageMethodsTrait
{
    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message = null): void
    {
        $this->message = $message;
    }
}
