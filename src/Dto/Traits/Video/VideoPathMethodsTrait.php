<?php

namespace ComponentBundle\Dto\Traits\Video;

/**
 * Trait VideoPathMethodsTrait
 * @package ComponentBundle\Dto\Traits\Video
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VideoPathMethodsTrait
{
    /**
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->video;
    }

    /**
     * @param string|null $video
     */
    public function setVideo(?string $video = null): void
    {
        $this->video = $video;
    }
}
