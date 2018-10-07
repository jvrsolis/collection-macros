<?php

use Illuminate\Support\Collection;

/**
 * Returns an associative array of values from
 * array as keys and their count as value.
 *
 * @param  array $array
 * @param  bool  $insensitive
 * @return array
 */
Collection::macro('occurances', function (bool $insensitive = false) {
    if ($insensitive) {
        return array_count_values(array_map('strtolower', $array));
    }

    return array_count_values($array);
});