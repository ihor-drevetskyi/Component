<?php

namespace ComponentBundle\Dto\Traits\Views;

/**
 * Interface ViewsMethodsInterface
 * @package ComponentBundle\Dto\Traits\Views
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ViewsMethodsInterface
{
    /**
     * @return int
     */
    public function getViews(): int;

    /**
     * @param int $views
     */
    public function setViews(int $views): void;
}
