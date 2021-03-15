<?php

namespace ComponentBundle\Model\Traits\Date;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Date\VerifiedAt\VerifiedAtMethodsTrait;

/**
 * Trait VerifiedAtTrait
 * @package ComponentBundle\Model\Traits\Date
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait VerifiedAtTrait
{
    use VerifiedAtMethodsTrait;

    /**
     * @var DateTimeInterface|null
     * @Assert\DateTime()
     * @ORM\Column(name="verified_at",type="datetime", nullable=true)
     */
    protected ?DateTimeInterface $verifiedAt = null;
}
