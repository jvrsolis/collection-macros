<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Shuffle the items in the array.
 *
 * @param  int  $seed
 * @return static
 */
Collection::macro('shuffle', function ($seed = null) {
    return new static(Arr::shuffle($this->items, $seed));
});