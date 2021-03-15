<?php

namespace ComponentBundle\Dto\Traits\Img;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Trait ImgMethodsTrait
 * @package ComponentBundle\Dto\Traits\Img
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ImgMethodsTrait
{
    /**
     * @return File|null
     */
    public function getImg(): ?File
    {
        return $this->img;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     * @param File|UploadedFile|null $img
     */
    public function setImg(?File $img = null): void
    {
        $this->img = $img;
    }

    /**
     * @return string|null
     */
    public function getImgName(): ?string
    {
        return $this->imgName;
    }

    /**
     * @param string|null $img_name
     */
    public function setImgName(?string $img_name = null): void
    {
        $this->imgName = $img_name;
    }

    /**
     * @return string|null
     */
    public function getTempImg(): ?string
    {
        return $this->tempImg;
    }

    /**
     * @param string|null $temp_img
     */
    public function setTempImg(?string $temp_img = null): void
    {
        $this->tempImg = $temp_img;
    }
}
