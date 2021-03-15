<?php

namespace ComponentBundle\Model\Traits\Img;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait ImgExtraTrait
 * @package ComponentBundle\Model\Traits\Img
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ImgExtraTrait
{
    /**
     * @var string|null
     * @ORM\Column(name="img_name", type="text", nullable=true)
     */
    protected ?string $imgName = null;

    /**
     * @var string|null
     * @ORM\Column(name="temp_img", type="text", nullable=true)
     */
    protected ?string $tempImg = null;
}
