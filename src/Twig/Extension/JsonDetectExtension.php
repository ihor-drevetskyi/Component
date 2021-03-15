<?php

namespace ComponentBundle\Twig\Extension;

use Twig\TwigFilter;
use Twig\Extension\AbstractExtension;

/**
 * Class JsonDetectExtension
 * @package ComponentBundle\Twig\Extension
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class JsonDetectExtension extends AbstractExtension
{
    /**
     * @return array|TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('json_detect', [$this, 'jsonDetect'])
        ];
    }

    /**
     * @param string $str
     * @return bool
     */
    public function jsonDetect(string $str): bool
    {
        json_decode($str);

        if (json_last_error() === JSON_ERROR_NONE) {
            return true;
        }

        return false;
    }
}
