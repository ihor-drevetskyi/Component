<?php

namespace ComponentBundle\Dto\Traits\User\Surname;

/**
 * Interface SurnameMethodsInterface
 * @package ComponentBundle\Dto\Traits\User\Surname
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SurnameMethodsInterface
{
    /**
     * @return string|null
     */
    public function getSurname(): ?string;

    /**
     * @param string|null $surname
     */
    public function setSurname(?string $surname = null): void;
}
