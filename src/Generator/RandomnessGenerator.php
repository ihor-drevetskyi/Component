<?php

namespace ComponentBundle\Generator;

use Exception;

/**
 * Class RandomnessGenerator
 * @package ComponentBundle\Generator
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class RandomnessGenerator implements RandomnessGeneratorInterface
{
    /**
     * @var string
     */
    protected string $digits;

    /**
     * @var string
     */
    protected string $uri_safe_alphabet;

    /**
     * RandomnessGenerator constructor.
     */
    public function __construct()
    {
        $this->digits = implode(range(0, 9));

        $this->uri_safe_alphabet =
            implode(range(0, 9))
            . implode(range('a', 'z'))
            . implode(range('A', 'Z'))
            . implode(['-', '_', '~']);
    }

    /**
     * @param int $length
     * @return string
     * @throws Exception
     */
    public function generateUriSafeString(int $length): string
    {
        return $this->generateStringOfLength($length, $this->uri_safe_alphabet);
    }

    /**
     * @param int $length
     * @return string
     * @throws Exception
     */
    public function generateNumeric(int $length): string
    {
        return $this->generateStringOfLength($length, $this->digits);
    }

    /**
     * @param int $min
     * @param int $max
     * @return int
     * @throws Exception
     */
    public function generateInt(int $min, int $max): int
    {
        return random_int($min, $max);
    }

    /**
     * @param int $length
     * @param string $alphabet
     * @return string
     * @throws Exception
     */
    protected function generateStringOfLength(int $length, string $alphabet): string
    {
        $alphabet_max_index = strlen($alphabet) - 1;
        $random_string = '';

        for ($i = 0; $i < $length; ++$i) {
            $index = random_int(0, $alphabet_max_index);
            $random_string .= $alphabet[$index];
        }

        return $random_string;
    }
}
