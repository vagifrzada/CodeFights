<?php

/**
 * @param $yourLeft
 * @param $yourRight
 * @param $friendsLeft
 * @param $friendsRight
 * @return bool
 */
function areEquallyStrong($yourLeft, $yourRight, $friendsLeft, $friendsRight): bool
{
    return (min($yourLeft, $yourRight) === min($friendsLeft, $friendsRight)) &&
           (max($yourLeft, $yourRight) === max($friendsLeft, $friendsRight));
}