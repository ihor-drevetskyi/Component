<?php

namespace ComponentBundle\Model\Traits\Id;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Dto\Traits\Id\IdMethodsTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait IdAutoTrait
 * @package ComponentBundle\Model\Traits\Id
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait IdAutoTrait
{
    use IdMethodsTrait;

    /**
     * @ORM\Id
     * @var int|null
     * @Assert\NotBlank()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     */
    protected ?int $id = null;
}
