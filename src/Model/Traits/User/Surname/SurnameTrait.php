<?php

namespace ComponentBundle\Model\Traits\User\Surname;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\User\Surname\SurnameMethodsTrait;

/**
 * Trait SurnameTrait
 * @package ComponentBundle\Model\Traits\User\Surname
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SurnameTrait
{
    use SurnameMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    protected ?string $surname = null;
}
