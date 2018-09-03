<?php

/**
 * @param string $inputString
 * @return bool
 */
function isIPv4Address(string $inputString): bool
{
    return filter_var($inputString, FILTER_VALIDATE_IP);
}
