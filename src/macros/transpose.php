<?php

use Illuminate\Support\Collection;

/**
 * Transpose an array. Rows become columns, columns become rows.
 * E.g.     becomes
 *  [1,2]    [1,3]
 *  [3,4]    [2,4]
 *
 * @return array
 */
Collection::macro('transpose', function () {
    return $this->make(array_map(function (...$items) {
        return $items;
    }, ...$this->values($array)));
});