<?php

namespace ComponentBundle\Dto\Traits\Id;

/**
 * Interface ResourceInterface
 * @package ComponentBundle\Dto\Traits\Id
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface ResourceInterface
{
    /**
     * @return int|string
     */
    public function getId();
}
