<?php

/**
 * @param int $yourLeft
 * @param int $yourRight
 * @param int $friendsLeft
 * @param int $friendsRight
 * @return bool
 */
function areEquallyStrong(int $yourLeft, int $yourRight, int $friendsLeft, int $friendsRight): bool
{
    return (min($yourLeft, $yourRight) === min($friendsLeft, $friendsRight)) &&
           (max($yourLeft, $yourRight) === max($friendsLeft, $friendsRight));
}
