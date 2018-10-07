<?php

use Illuminate\Support\Collection;

/**
 * Sort a multidimensional array by keys and values.
 *
 * @param  array  $array
 * @return array
 */
Collection::macro('sortMulti', function () {
    foreach ($array as &$value) {
        if (is_array($value)) {
            $value = static::sortMulti($value);
        }
    }

    if (static::isAssoc($array)) {
        ksort($array);
    } else {
        sort($array);
    }

    return $array;
});