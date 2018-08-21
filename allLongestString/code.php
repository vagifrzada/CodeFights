<?php

/**
 * @param array $inputArray
 * @return array
 */
function allLongestStrings(array $inputArray): array
{
    $max = max(array_map('strlen', $inputArray));

    return array_filter($inputArray, function ($item) use ($max) {
        return strlen($item) === $max;
    });
}