<?php

namespace ComponentBundle\Dto\Traits\Date\PublishAt;

use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait PublishAtTrait
 * @package ComponentBundle\Dto\Traits\Date\PublishAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PublishAtTrait
{
    use PublishAtMethodsTrait;

    /**
     * @var DateTimeInterface
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected DateTimeInterface $publishAt;
}
