<?php

namespace ComponentBundle\Dto\Traits\User\Name;

/**
 * Trait NameMethodsTrait
 * @package ComponentBundle\Dto\Traits\User\Name
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait NameMethodsTrait
{
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return (empty($this->name)) ? null : $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name = null): void
    {
        $this->name = $name;
    }
}
