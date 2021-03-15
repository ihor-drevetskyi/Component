<?php

namespace ComponentBundle\Dto\Traits\User\Surname;

/**
 * Trait SurnameMethodsTrait
 * @package ComponentBundle\Dto\Traits\User\Surname
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SurnameMethodsTrait
{
    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return (empty($this->surname)) ? null : $this->surname;
    }

    /**
     * @param string|null $surname
     */
    public function setSurname(?string $surname = null): void
    {
        $this->surname = $surname;
    }
}
