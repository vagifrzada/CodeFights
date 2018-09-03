<?php

/**
 * @param string $inputString
 * @return bool
 */
function palindromeRearranging(string $inputString): bool
{
    $wordCount = array_count_values(str_split($inputString));

    $oddCount = 0;

    foreach ($wordCount as $word => $count) {
        if ($count % 2 != 0) {
            $oddCount++;
        }
    }

    return $oddCount <= 1;
}
