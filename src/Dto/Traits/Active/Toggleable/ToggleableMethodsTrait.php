<?php

namespace ComponentBundle\Dto\Traits\Active\Toggleable;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait ToggleableMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\Toggleable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ToggleableMethodsTrait
{
    /**
     *
     */
    public function enable(): void
    {
        $this->enabled = YesOrNoInterface::YES;
    }

    /**
     *
     */
    public function disable(): void
    {
        $this->enabled = YesOrNoInterface::NO;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = (bool) $enabled;
    }
}
