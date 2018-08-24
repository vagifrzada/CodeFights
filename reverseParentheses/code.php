<?php

/**
 * @param string $s
 * @return string
 */
function reverseParentheses(string $s): string
{
    if (strpos($s, '(') !== false) {
        return reverseParentheses(
            reverse($s)
        );
    }

    return $s;
}

/**
 * @param string $s
 * @return string
 */
function reverse(string $s): string
{
    $regex = '/\(([^()]*)\)/im';
    preg_match($regex, $s, $matches);
    // return preg_replace($regex, strrev($matches[1]), $s);
    return str_replace('('. $matches[1] .')', strrev($matches[1]), $s);
}

