<?php

/**
 * @param string $s
 * @return string
 */
function reverseParentheses(string $s): string
{
    while (preg_match('/\(([^()]*)\)/im', $s, $matches)) {
       $s = str_replace($matches[0], strrev($matches[1]), $s);
    }

    return $s;
}
