<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Collapse an array of arrays into a single array.
 *
 * @param  array  $array
 * @return array
 */
Collection::macro('collapse', function () {
    return new static(Arr::collapse($this->items));
});