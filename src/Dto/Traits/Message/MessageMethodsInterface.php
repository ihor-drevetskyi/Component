<?php

namespace ComponentBundle\Dto\Traits\Message;

/**
 * Interface MessageMethodsInterface
 * @package ComponentBundle\Dto\Traits\Message
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface MessageMethodsInterface
{
    /**
     * @return null|string
     */
    public function getMessage(): ?string;

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message = null): void;
}
