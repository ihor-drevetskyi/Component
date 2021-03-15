<?php

namespace ComponentBundle\Dto\Traits\Views;

/**
 * Trait ViewsMethodsTrait
 * @package ComponentBundle\Dto\Traits\Views
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ViewsMethodsTrait
{
    /**
     * @return int
     */
    public function getViews(): int
    {
        return $this->views;
    }

    /**
     * @param int $views
     */
    public function setViews(int $views): void
    {
        $this->views = $views;
    }
}
