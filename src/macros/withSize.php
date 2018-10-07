<?php

use Illuminate\Support\Collection;

/*
 * Create a new collection with the specified amount of items
 *
 * @param int $size
 *
 * @return \Illuminate\Support\Collection
 */
Collection::macro('withSize', function (int $size) {
    if ($size < 1) {
        return new static();
    }
    return new static(range(1, $size));
});