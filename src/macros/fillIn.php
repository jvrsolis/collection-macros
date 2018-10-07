<?php

use Illuminate\Support\Collection;

/**
 * Fill in missing numeric keys
 *
 * @return array
 */
Collection::macro('fillIn', function ($default = null, $atleast = 0) {
    $array = $array + array_fill(0, max($atleast, max(array_keys($array))), $default);

    ksort($array);

    return $array;
});