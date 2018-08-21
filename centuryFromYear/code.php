<?php

/**
 * @param int $year
 * @return int
 */
function centuryFromYear(int $year): int
{
   return ceil($year / 100);
}