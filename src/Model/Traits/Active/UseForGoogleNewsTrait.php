<?php

namespace ComponentBundle\Model\Traits\Active;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\YesOrNoInterface;
use ComponentBundle\Dto\Traits\Active\UseForGoogleNews\UseForGoogleNewsMethodsTrait;

/**
 * Trait UseForGoogleNewsTrait
 * @package ComponentBundle\Model\Traits\Active
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait UseForGoogleNewsTrait
{
    use UseForGoogleNewsMethodsTrait;

    /**
     * @var boolean
     * @ORM\Column(name="use_for_google_news", type="boolean", nullable=false, options={"default" : 1})
     */
    protected bool $useForGoogleNews = YesOrNoInterface::YES;
}
