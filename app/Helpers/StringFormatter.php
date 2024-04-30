<?php

namespace App\Helpers;

class StringFormatter
{
    /**
     * conver string to pascal case
     */
     public static function toPascal(string $string): string
     {
        $string = ucwords(strtolower($string));
        $string = str_replace([' ', '-', '_'], '', $string);
        return $string;
     }
}
