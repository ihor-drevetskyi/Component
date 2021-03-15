<?php

namespace ComponentBundle\Dto\Traits\Active\Locked;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait LockedMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\Locked
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LockedMethodsTrait
{
    /**
     * @return bool
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }

    /**
     *
     */
    public function enableLocked(): void
    {
        $this->locked = YesOrNoInterface::YES;
    }

    /**
     *
     */
    public function disableLocked(): void
    {
        $this->locked = YesOrNoInterface::NO;
    }

    /**
     * @param bool $locked
     */
    public function setLocked(bool $locked): void
    {
        $this->locked = $locked;
    }
}
