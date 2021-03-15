<?php

namespace ComponentBundle\Dto\Traits\Active\UseForGoogleNews;

/**
 * Trait UseForGoogleNewsMethodsTrait
 * @package ComponentBundle\Dto\Traits\Active\UseForGoogleNews
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UseForGoogleNewsMethodsTrait
{
    /**
     * @return bool
     */
    public function isUseForGoogleNews(): bool
    {
        return $this->useForGoogleNews;
    }

    /**
     * @param bool $useForGoogleNews
     */
    public function setUseForGoogleNews(bool $useForGoogleNews): void
    {
        $this->useForGoogleNews = $useForGoogleNews;
    }
}
