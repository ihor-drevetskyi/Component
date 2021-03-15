<?php

namespace ComponentBundle\Dto\Traits\Id;

/**
 * Interface IdMethodsInterface
 * @package ComponentBundle\Dto\Traits\Id
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface IdMethodsInterface extends ResourceInterface
{
    /**
     * @param int $id
     */
    public function setId(int $id): void;
}
