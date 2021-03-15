<?php

namespace ComponentBundle\Dto\Traits\Video\VideoUrl;

/**
 * Trait VideoUrlMethodsTrait
 * @package ComponentBundle\Dto\Traits\Video\VideoUrl
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VideoUrlMethodsTrait
{
    /**
     * @return string|null
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @param string|null $video_url
     */
    public function setVideoUrl(?string $video_url = null): void
    {
        $this->videoUrl = $video_url;
    }
}
