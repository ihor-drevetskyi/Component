<?php

namespace ComponentBundle\Dto\Traits\Img;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait ImgTrait
 * @package ComponentBundle\Dto\Traits\Img
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ImgTrait
{
    use ImgExtraTrait;
    use ImgMethodsTrait;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @var File|null
     * @Assert\File(
     *     maxSize="20M",
     *     mimeTypes={"image/png", "image/jpg", "image/jpeg", "image/pjpeg"}
     * )
     * @Vich\UploadableField(mapping="images", fileNameProperty="imageName")
     */
    protected ?File $img = null;
}
