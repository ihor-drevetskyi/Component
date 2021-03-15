<?php

namespace ComponentBundle\Dto\Traits\ManagerComment;

/**
 * Interface ManagerCommentMethodsInterface
 * @package ComponentBundle\Dto\Traits\ManagerComment
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ManagerCommentMethodsInterface
{
    /**
     * @return string|null
     */
    public function getManagerComment(): ?string;

    /**
     * @param string|null $manager_comment
     */
    public function setManagerComment(?string $manager_comment = null): void;
}
