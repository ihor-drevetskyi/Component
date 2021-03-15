<?php

namespace ComponentBundle\Dto\Traits\User\Email;

/**
 * Interface GetEmailMethodInterface
 * @package ComponentBundle\Dto\Traits\User\Email
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface GetEmailMethodInterface
{
    /**
     * Gets email.
     * @return string|null
     */
    public function getEmail(): ?string;
}
