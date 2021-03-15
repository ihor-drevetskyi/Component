<?php

namespace ComponentBundle\Twig\Extension;

use Twig\TwigFilter;
use Twig\Extension\AbstractExtension;

/**
 * Class JsonDecodeExtension
 * @package ComponentBundle\Twig\Extension
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class JsonDecodeExtension extends AbstractExtension
{
    /**
     * @return array|TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('json_decode', [$this, 'jsonDecode'])
        ];
    }

    /**
     * @param string $str
     * @return mixed
     */
    public function jsonDecode(string $str)
    {
        return json_decode($str, true);
    }
}
