<?php

namespace ComponentBundle\Dto\Traits\ManagerComment;

/**
 * Trait ManagerCommentTrait
 * @package ComponentBundle\Dto\Traits\ManagerComment
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ManagerCommentTrait
{
    use ManagerCommentMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $managerComment = null;
}
