<?php

namespace ComponentBundle\Dto\Traits\Date\DeadLine;

use DateTime;
use DateTimeInterface;

/**
 * Trait DeadLineMethodsTrait
 * @package ComponentBundle\Dto\Traits\Date\DeadLine
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait DeadLineMethodsTrait
{
    /**
     * Get deadLine
     * @return DateTimeInterface
     */
    public function getDeadLine(): DateTimeInterface
    {
        if (!$this->deadLine) {
            self::setDeadLine();
        }

        return $this->deadLine;
    }

    /**
     * @param DateTimeInterface|null $dead_line
     * @return mixed|void
     */
    public function setDeadLine(?DateTimeInterface $dead_line = null): void
    {
        if (!$dead_line) {
            $this->deadLine = new DateTime();
        } else {
            $this->deadLine = $dead_line;
        }
    }
}
