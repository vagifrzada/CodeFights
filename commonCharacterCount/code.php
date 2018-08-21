<?php

/**
 * @param string $s1
 * @param string $s2
 * @return int
 */
function commonCharacterCount(string $s1, string $s2)
{
    $out = [];

    for ($i = 0; $i < strlen($s1); $i++) {
        if (($pos = strpos($s2, $s1[$i])) !== false) {
            $out[] = $s1[$i];
            $s2[$pos] = '-';
        }
    }

    return count($out);
}