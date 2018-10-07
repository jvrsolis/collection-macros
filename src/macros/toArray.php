<?php

use Illuminate\Support\Collection;

/**
 * Get the array of items as a plain array.
 *
 * @return array
 */
Collection::macro('toCollection', function () {
    return array_map(function ($value) {
        return $value instanceof Arrayable ? $value->toArray() : $value;
    }, $this->items);
});