<?php

namespace ComponentBundle\Model\Traits\Date;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Date\PublishAt\PublishAtMethodsTrait;

/**
 * Trait PublishAtTrait
 * @package ComponentBundle\Model\Traits\Date
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PublishAtTrait
{
    use PublishAtMethodsTrait;

    /**
     * @var DateTimeInterface
     * @Assert\NotBlank()
     * @Assert\DateTime()
     * @ORM\Column(name="publish_at", type="datetime", nullable=false)
     */
    protected DateTimeInterface $publishAt;
}
