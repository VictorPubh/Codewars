<?php

namespace Kata;

class CamelStringCase
{
    function apply(string $str)
    {
        $explode_character = ['-', '_', ' '];
        $str_explode = array();

        foreach ($explode_character as $character) {
            if (str_contains($str, $character)) {
                $str_explode = explode($character, $str);
            }
        }

        $str_composition = strtolower(
            array_shift($str_explode)
        );

        foreach ($str_explode as &$word) {
            $str_composition .= ucfirst($word);
        }

        return $str_composition;
    }
}
