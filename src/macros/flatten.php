<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Flatten a multi-dimensional array into a single level.
 *
 * @param  array  $array
 * @param  int  $depth
 * @return array
 */
Collection::macro('flatten', function ($depth = INF) {
    return new static(Arr::flatten($this->items, $depth));
});