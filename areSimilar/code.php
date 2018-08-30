<?php

/**
 * @param array $a
 * @param array $b
 * @return bool
 */
function areSimilar(array $a, array $b): bool
{
    if ($a == $b) {
        return true;
    }

    $c = [];
    $d = [];

    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] != $b[$i]) {
            $c[] = $a[$i];
            $d[] = $b[$i];
        }
    }

    return $c == array_reverse($d);
}
