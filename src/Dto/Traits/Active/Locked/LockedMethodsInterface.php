<?php

namespace ComponentBundle\Dto\Traits\Active\Locked;

/**
 * Interface LockedMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\Locked
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface LockedMethodsInterface
{
    /**
     * @return bool
     */
    public function getLocked(): bool;

    /**
     *
     */
    public function enableLocked(): void;

    /**
     *
     */
    public function disableLocked(): void;

    /**
     * @param bool $locked
     */
    public function setLocked(bool $locked): void;
}
