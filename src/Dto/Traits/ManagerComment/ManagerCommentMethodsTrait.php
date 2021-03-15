<?php

namespace ComponentBundle\Dto\Traits\ManagerComment;

/**
 * Trait ManagerCommentMethodsTrait
 * @package ComponentBundle\Dto\Traits\ManagerComment
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ManagerCommentMethodsTrait
{
    /**
     * @return string|null
     */
    public function getManagerComment(): ?string
    {
        return $this->managerComment;
    }

    /**
     * @param string|null $manager_comment
     */
    public function setManagerComment(?string $manager_comment = null): void
    {
        $this->managerComment = $manager_comment;
    }
}
