<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Pluck an array of values from an array.
 *
 * @param  array  $array
 * @param  string|array  $value
 * @param  string|array|null  $key
 * @return array
 */
Collection::macro('pluck', function ($value, $key = null) {
    return new static(Arr::pluck($this->items, $value, $key));
});