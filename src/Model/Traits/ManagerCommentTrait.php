<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\ManagerComment\ManagerCommentMethodsTrait;

/**
 * Trait ManagerCommentTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ManagerCommentTrait
{
    use ManagerCommentMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="manager_comment", type="text", nullable=true)
     */
    protected ?string $managerComment = null;
}
