<?php

namespace ComponentBundle\Dto\Traits\Active\UseForGoogleNews;

use ComponentBundle\Dto\Traits\YesOrNoInterface;

/**
 * Trait UseForGoogleNewsTrait
 * @package ComponentBundle\Dto\Traits\Active\UseForGoogleNews
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UseForGoogleNewsTrait
{
    use UseForGoogleNewsMethodsTrait;

    /**
     * @var boolean
     */
    protected bool $useForGoogleNews = YesOrNoInterface::YES;
}
