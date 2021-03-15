<?php

namespace ComponentBundle\Helper;

/**
 * Interface RequestHelperInterface
 * @package ComponentBundle\Helper
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface RequestHelperInterface
{
    /**
     * Current URL WITHOUT query string
     */
    public function getCurrentUrl(): string;

    /**
     * Current URL INCLUDING query string
     */
    public function getCurrentUrlWithQueryString(): string;
}
