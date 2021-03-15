<?php

namespace ComponentBundle\Twig\Extension;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

/**
 * Class ArrayExtension
 * @package ComponentBundle\Twig\Extension
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class ArrayExtension extends AbstractExtension
{
    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('addToArray', [$this, 'addToArray']),
            new TwigFunction('removeFromArray', [$this, 'removeFromArray'])
        ];
    }

    /**
     * @param array $first
     * @param array $second
     * @return array
     */
    public function addToArray(array $first, array $second): array
    {
        return array_replace_recursive($first, $second);
    }

    /**
     * @param array $first
     * @param array $second
     * @return array
     */
    public function removeFromArray(array $first, array $second): array
    {
        foreach ($second as $key => $item) {
            if (isset($first[$key])) {
                foreach ($item as $element) {
                    unset($first[$key][array_search($element, $first[$key])]);
                    if (empty($first[$key])) {
                        unset($first[$key]);
                    }
                }
            }
        }

        return $first;
    }
}
