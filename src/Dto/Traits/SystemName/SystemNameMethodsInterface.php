<?php

namespace ComponentBundle\Dto\Traits\SystemName;

/**
 * Interface SystemNameMethodsInterface
 * @package ComponentBundle\Dto\Traits\SystemName
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SystemNameMethodsInterface
{
    /**
     * @return null|string
     */
    public function getSystemName(): ?string;

    /**
     * @param string|null $system_name
     */
    public function setSystemName(?string $system_name = null): void;
}
