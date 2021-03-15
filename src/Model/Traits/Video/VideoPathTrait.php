<?php

namespace ComponentBundle\Model\Traits\Video;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Video\VideoPathMethodsTrait;

/**
 * Trait VideoPathTrait
 * @package ComponentBundle\Model\Traits\Video
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VideoPathTrait
{
    use VideoPathMethodsTrait;

    /**
     * @var string|null - video path
     * @ORM\Column(name="video", type="text", nullable=true)
     */
    protected ?string $video = null;
}
