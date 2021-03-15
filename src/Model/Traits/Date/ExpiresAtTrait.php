<?php

namespace ComponentBundle\Model\Traits\Date;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Date\ExpiresAt\ExpiresAtMethodsTrait;

/**
 * Trait ExpiresAtTrait
 * @package ComponentBundle\Model\Traits\Date
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait ExpiresAtTrait
{
    use ExpiresAtMethodsTrait;

    /**
     * @var DateTimeInterface|null
     * @Assert\DateTime()
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    protected ?DateTimeInterface $expiresAt = null;
}
