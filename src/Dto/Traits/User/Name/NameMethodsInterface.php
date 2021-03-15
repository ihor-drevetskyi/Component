<?php

namespace ComponentBundle\Dto\Traits\User\Name;

/**
 * Interface NameMethodsInterface
 * @package ComponentBundle\Dto\Traits\User\Name
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface NameMethodsInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name = null): void;
}
