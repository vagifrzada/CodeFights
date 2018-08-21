<?php

/**
 * @param array $matrix
 * @return int
 */
function matrixElementsSum(array $matrix): int
{
    $notSuitable = [];
    $total = 0;

    for ($i = 0; $i < count($matrix); $i++) {
        for ($x = 0; $x < count($matrix[0]); $x++) {
            if ($matrix[$i][$x] === 0) {
                $notSuitable[] = $x;
            } elseif (! in_array($matrix[$i][$x], $notSuitable)) {
                $total += $matrix[$i][$x];
            }
        }
    }

    return $total;
}