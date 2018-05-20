<?php

function checkPalindrome(string $inputString) : bool
{
    return strrev($inputString) == $inputString;
}