<?php

namespace ComponentBundle\Generator;

use Exception;

/**
 * Interface RandomnessGeneratorInterface
 * @package ComponentBundle\Generator
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface RandomnessGeneratorInterface
{
    /**
     * @param int $length
     * @return string
     * @throws Exception
     */
    public function generateUriSafeString(int $length): string;

    /**
     * @param int $length
     * @return string
     * @throws Exception
     */
    public function generateNumeric(int $length): string;

    /**
     * @param int $min
     * @param int $max
     * @return int
     * @throws Exception
     */
    public function generateInt(int $min, int $max): int;
}
