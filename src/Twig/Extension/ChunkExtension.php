<?php

namespace ComponentBundle\Twig\Extension;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

/**
 * Class ChunkExtension
 * @package ComponentBundle\Twig\Extension
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class ChunkExtension extends AbstractExtension
{
    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('partition', [$this, 'partition'])
        ];
    }

    /**
     * @param $list
     * @param int $count
     * @return array
     */
    public function partition($list, int $count): array
    {
        $list_len = count($list);
        $part_len = floor($list_len / $count);
        $part_rem = $list_len % $count;
        $partition = [];
        $mark = 0;

        for ($px = 0; $px < $count; $px++) {
            $incr = ($px < $part_rem) ? $part_len + 1 : $part_len;
            $partition[$px] = array_slice($list->toArray(), $mark, $incr);
            $mark += $incr;
        }

        return $partition;
    }
}
