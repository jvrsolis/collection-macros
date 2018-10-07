<?php

use Illuminate\Support\Collection;

/**
 * Zip the array together with one or more arrays.
 *
 * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
 *      => [[1, 4], [2, 5], [3, 6]]
 *
 * @param  mixed ...$items
 * @return static
 */
Collection::macro('zip', function ($items) {
    $arrayableItems = array_map(function ($items) {
        return $this->getArrayableItems($items);
    }, func_get_args());

    $params = array_merge([function () {
        return new static(func_get_args());
    }, $this->items], $arrayableItems);

    return new static(call_user_func_array('array_map', $params));
});