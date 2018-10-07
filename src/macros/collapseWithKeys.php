<?php

use Illuminate\Support\Collection;

/**
 * Collapse an array of arrays into a single array,
 * avoids using array_merge to preserve the keys.
 *
 * @param  array $array
 * @return array
 */
Collection::macro('collapseWithKeys', function () {
    $result = [];

    foreach ($array as $child) {
        if (is_array($child)) {
            foreach ($child as $key => $value) {
                $result[$key] = $value;
            }
        }
    }

    return $result;
});