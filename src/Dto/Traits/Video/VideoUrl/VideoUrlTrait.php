<?php

namespace ComponentBundle\Dto\Traits\Video\VideoUrl;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait VideoUrlTrait
 * @package ComponentBundle\Dto\Traits\Video\VideoUrl
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VideoUrlTrait
{
    use VideoUrlMethodsTrait;

    /**
     * @var string|null $video_url
     * @Assert\Url()
     */
    protected ?string $videoUrl = null;
}
