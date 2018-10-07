<?php

use Illuminate\Support\Collection;

/**
 * Inner join the given arrays.
 *
 * @param  array  ...$arrays
 * @return array
 */
Collection::macro('innerJoin', function (array $left, array $right, $on) {
    $out = array();
    foreach ($left as $left_record) {
        foreach ($right as $right_record) {
            if ($left_record[$on] == $right_record[$on]) {
                $out[] = array_merge($left_record, $right_record);
            }
        }
    }
    return $out;
});