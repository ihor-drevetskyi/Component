<?php

namespace ComponentBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\TransitId\TransitIdMethodsTrait;

/**
 * Trait TransitIdTrait
 * @package ComponentBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait TransitIdTrait
{
    use TransitIdMethodsTrait;

    /**
     * @var int|null
     * @Assert\Length(max="255")
     * @ORM\Column(name="transit_id", type="integer", nullable=true)
     */
    protected ?int $transitId = null;
}
