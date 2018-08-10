<?php

function matrixElementsSum(array $matrix): int
{
    $notSuitable = [];
    $total = 0;

    for ($i = 0; $i < count($matrix); $i++) {
        for ($x = 0; $x < count($matrix[0]); $x++) {
            if ($matrix[$i][$x] === 0) {
                $notSuitable[] = $x;
            } elseif (! in_array($x, $notSuitable)) {
                $total += $matrix[$i][$x];
            }
        }
    }

    return $total;
}

print_r(
    matrixElementsSum([
        [0, 1, 1, 2],
        [0, 5, 0, 0],
        [2, 0, 3, 3],
   ])
); // 9