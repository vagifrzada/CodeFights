<?php

/**
 * @param array $inputArray
 * @return int
 */

function arrayMaximalAdjacentDifference(array $inputArray): int
{
    $out = [];

    for ($i = 0; $i < count($inputArray) - 1; $i++) {
        $out[] = abs($inputArray[$i] - $inputArray[$i + 1]);
    }

    return max($out);
}
