<?php

namespace ComponentBundle\Dto\Traits\Id;

/**
 * Trait IdMethodsTrait
 * @package ComponentBundle\Dto\Traits\Id
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait IdMethodsTrait
{
    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
