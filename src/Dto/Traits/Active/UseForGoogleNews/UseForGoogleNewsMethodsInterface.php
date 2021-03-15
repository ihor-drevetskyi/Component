<?php

namespace ComponentBundle\Dto\Traits\Active\UseForGoogleNews;

/**
 * Interface UseForGoogleNewsMethodsInterface
 * @package ComponentBundle\Dto\Traits\Active\UseForGoogleNews
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface UseForGoogleNewsMethodsInterface
{
    /**
     * @return bool
     */
    public function isUseForGoogleNews(): bool;

    /**
     * @param bool $useForGoogleNews
     */
    public function setUseForGoogleNews(bool $useForGoogleNews): void;
}
