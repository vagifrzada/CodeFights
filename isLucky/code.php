<?php

function isLucky($n): bool
{
    $n = (string) $n;

    $firstHalfSum = $secondHalfSum = 0;

    $half = strlen($n) / 2;
    $firstHalf  = substr($n, 0, $half);
    $secondHalf = substr($n, $half);

    $firstHalfSum = getSumOfHalf($firstHalf);
    $secondHalfSum = getSumOfHalf($secondHalf);

    return $firstHalfSum === $secondHalfSum;
}

function getSumOfHalf($number)
{
    $result = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        $result += $number[$i];
    }

    return $result;
}

var_dump(isLucky(312411));