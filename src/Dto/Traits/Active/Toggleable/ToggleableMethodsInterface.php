<?php

namespace ComponentBundle\Dto\Traits\Active\Toggleable;

/**
 * Interface ToggleableMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\Toggleable
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ToggleableMethodsInterface
{
    /**
     *
     */
    public function enable(): void;

    /**
     *
     */
    public function disable(): void;

    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void;
}
