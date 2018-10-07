<?php

use Illuminate\Support\Collection;

/**
 * Slice the array.
 *
 * @param  int  $offset
 * @param  int  $length
 * @return static
 */
Collection::macro('slice', function (int $offset, int $length = null) {
    return new static(array_slice($this->items, $offset, $length, true));
});