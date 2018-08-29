<?php

/**
 * @param array $a
 * @return array
 */
function alternatingSums(array $a): array
{
    $firstTeam  = 0;
    $secondTeam = 0;

    foreach ($a as $index => $value) {
        if ($index % 2 === 0) {
            $firstTeam  += $value;
        } else {
            $secondTeam += $value;
        }
    }

    return [$firstTeam, $secondTeam];
}