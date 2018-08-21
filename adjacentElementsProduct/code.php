<?php

/**
 * @param array $inputArray
 * @return int
 */
function adjacentElementsProduct(array $inputArray): int
{
   $numbers = [];
   
   for ($i = 0; $i < count($inputArray) - 1; $i++) {
      $numbers[] = $inputArray[$i] * $inputArray[$i + 1];
   }

   return max($numbers);
}