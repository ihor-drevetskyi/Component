<?php

namespace ComponentBundle\Dto\Traits\Video;

/**
 * Trait VideoPathTrait
 * @package ComponentBundle\Dto\Traits\Video
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VideoPathTrait
{
    use VideoPathMethodsTrait;

    /**
     * @var string|null - video path
     */
    protected ?string $video = null;
}
