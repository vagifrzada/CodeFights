<?php

/**
 * @param array $a
 * @return int|mixed
 */
function firstDuplicate(array $a): int
{
    $container = [];

    for ($i = 0; $i < count($a); $i++) {
        if (! isset($container[$a[$i]])) {
            $container[$a[$i]] = 'exists !';
            continue;
        }

        return $a[$i];
    }

    return -1;
}
