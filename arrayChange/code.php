<?php

/**
 * @param array $inputArray
 * @return int
 */
function changeArray(array $inputArray): int
{
    $count = 0;

    for ($i = 0; $i < count($inputArray) - 1; $i++) {
        if ($inputArray[$i] >= $inputArray[$i + 1]) {
            $count += $inputArray[$i] + 1 - $inputArray[$i + 1];
            $inputArray[$i + 1] = $inputArray[$i] + 1;
        }
    }

    return $count;
}
