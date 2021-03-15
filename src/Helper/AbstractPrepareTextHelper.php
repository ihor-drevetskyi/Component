<?php

namespace ComponentBundle\Helper;

/**
 * Class AbstractPrepareTextHelper
 * @package ComponentBundle\Helper
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class AbstractPrepareTextHelper
{
    /**
     * @param string|null $text
     * @return string|null
     */
    public static function prepareText(?string $text = null): ?string
    {
        if ($text) {
            $text = htmlentities($text, null, 'utf-8');
            $text = html_entity_decode($text);
            $text = str_replace("&nbsp;", " ", $text);
        }

        return $text;
    }

    /**
     * @param string|null $string
     * @return string|null
     */
    public static function canonicalize(?string $string): ?string
    {
        return null === $string ? null : mb_convert_case($string, MB_CASE_LOWER, mb_detect_encoding($string));
    }

    /**
     * @param string|null $text
     * @return string|null
     */
    public static function stripped(?string $text = null): ?string
    {
        if ($text) {
            $text = trim(strip_tags($text));
        }

        return $text;
    }
}
