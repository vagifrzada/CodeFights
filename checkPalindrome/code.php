<?php

/**
 * @param string $inputString
 * @return bool
 */
function checkPalindrome(string $inputString): bool
{
    return strrev($inputString) === $inputString;
}