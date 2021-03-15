<?php

namespace ComponentBundle\Dto\Traits\Date\PublishAt;

use DateTimeInterface;

/**
 * Interface PublishAtMethodsInterface
 * @package ComponentBundle\Dto\Traits\Date\PublishAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface PublishAtMethodsInterface
{
    /**
     * @return DateTimeInterface
     */
    public function getPublishAt(): DateTimeInterface;

    /**
     * @param DateTimeInterface|null $publish_at
     */
    public function setPublishAt(?DateTimeInterface $publish_at = null): void;
}
