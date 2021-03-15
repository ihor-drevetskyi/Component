<?php

namespace ComponentBundle\Dto\Traits\Video\VideoUrl;

/**
 * Interface VideoUrlMethodsInterface
 * @package ComponentBundle\Dto\Traits\Video\VideoUrl
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface VideoUrlMethodsInterface
{
    /**
     * @return string|null
     */
    public function getVideoUrl(): ?string;

    /**
     * @param string|null $video_url
     */
    public function setVideoUrl(?string $video_url = null): void;
}
