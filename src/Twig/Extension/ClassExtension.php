<?php

namespace ComponentBundle\Twig\Extension;

use ReflectionClass;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

/**
 * Class ClassExtension
 * @package ComponentBundle\Twig\Extension
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class ClassExtension extends AbstractExtension
{
    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('class', [$this, 'getClass'])
        ];
    }

    /**
     * @param $object
     * @return string
     */
    public function getClass($object): string
    {
        return (new ReflectionClass($object))->getShortName();
    }
}
