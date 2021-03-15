<?php

namespace ComponentBundle\Model\Traits\Video;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Video\VideoUrl\VideoUrlMethodsTrait;

/**
 * Trait VideoUrlTrait
 * @package ComponentBundle\Model\Traits\Video
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VideoUrlTrait
{
    use VideoUrlMethodsTrait;

    /**
     * @var string|null $videoUrl
     * @Assert\Url()
     * @ORM\Column(name="video_url", type="text", nullable=true)
     */
    protected ?string $videoUrl = null;
}
