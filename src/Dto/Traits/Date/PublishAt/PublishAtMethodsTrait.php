<?php

namespace ComponentBundle\Dto\Traits\Date\PublishAt;

use DateTime;
use DateTimeInterface;

/**
 * Trait PublishAtMethodsTrait
 * @package ComponentBundle\Dto\Traits\Date\PublishAt
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait PublishAtMethodsTrait
{
    /**
     * @return DateTimeInterface
     */
    public function getPublishAt(): DateTimeInterface
    {
        if (!$this->publishAt) {
            self::setPublishAt();
        }

        return $this->publishAt;
    }

    /**
     * @param DateTimeInterface|null $publish_at
     */
    public function setPublishAt(?DateTimeInterface $publish_at = null): void
    {
        if (!$publish_at) {
            $this->publishAt = new DateTime();
        } else {
            $this->publishAt = $publish_at;
        }
    }
}
