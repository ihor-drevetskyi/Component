<?php

namespace ComponentBundle\Dto\Traits\Img;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Interface ImgMethodsInterface
 * @package ComponentBundle\Dto\Traits\Img
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ImgMethodsInterface
{
    /**
     * @return File|null
     */
    public function getImg(): ?File;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     * @param File|UploadedFile|null $img
     */
    public function setImg(?File $img = null): void;

    /**
     * @return string|null
     */
    public function getImgName(): ?string;

    /**
     * @param string|null $img_name
     */
    public function setImgName(?string $img_name = null): void;

    /**
     * @return string|null
     */
    public function getTempImg(): ?string;

    /**
     * @param string|null $temp_img
     */
    public function setTempImg(?string $temp_img = null): void;
}
