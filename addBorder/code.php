<?php

/**
 * @param array $picture
 * @return array
 */
function addBorder(array $picture): array
{
    $length = strlen($picture[0]) + 2;

    $picture = array_map(function ($item) {
        return '*' . $item . '*';
    }, $picture);

    array_unshift($picture, str_repeat('*', $length));
    array_push($picture, str_repeat('*', $length));


    return $picture;
}
