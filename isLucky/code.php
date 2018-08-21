<?php

/**
 * @param $n
 * @return bool
 */
function isLucky($n): bool
{
    $n = (string) $n;

    $half = strlen($n) / 2;
    $firstHalf  = substr($n, 0, $half);
    $secondHalf = substr($n, $half);

    $firstHalfSum = array_sum(str_split($firstHalf));
    $secondHalfSum = array_sum(str_split($secondHalf));

    return $firstHalfSum === $secondHalfSum;
}