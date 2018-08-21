<?php

/**
 * @param string $number
 * @return array
 */
function newNumeralSystem(string $number): array
{
    $out = [];

    $letters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
        'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z'
    ];

    $decimal = array_search($number, $letters);
    $count = count($letters);

    for ($i = 0; $i < $count; $i++) {
        for ($x = $count; $x >= $i; $x--) {
            if ($i + $x == $decimal) {
                $out[] = "{$letters[$i]} + {$letters[$x]}";
            }
        }
    }

    return $out;
}