<?php

namespace ComponentBundle\Dto\Traits\Video;

/**
 * Interface VideoPathMethodsInterface
 * @package ComponentBundle\Dto\Traits\Video
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface VideoPathMethodsInterface
{
    /**
     * @return string|null
     */
    public function getVideo(): ?string;

    /**
     * @param string|null $video
     */
    public function setVideo(?string $video = null): void;
}
