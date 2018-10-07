<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * If the given value is not an array, wrap it in one.
 *
 * @param  mixed  $value
 * @return array
 */
Collection::macro('wrap', function ($value) {
    return $value instanceof self
        ? new static($value)
        : new static(Arr::wrap($value));
});