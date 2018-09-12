<?php

/**
 * @param string $s
 * @return string
 */
function firstNotRepeatingCharacter(string $s): string
{
    $cont = [];

    for ($i = 0; $i < strlen($s); $i++) {
        if (! isset($cont[$s[$i]])) {
            $cont[$s[$i]] = 1;
        } else {
            $cont[$s[$i]]++;
        }
    }

    return array_search(1, $cont) ?: '_';
}