<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Get one or a specified number of random values from an array.
 *
 * @param  array  $array
 * @param  int|null  $number
 * @return mixed
 *
 * @throws \InvalidArgumentException
 */
Collection::macro('random', function ($number = null) {
    if (is_null($number)) {
        return Arr::random($this->items);
    }

    return new static(Arr::random($this->items, $number));
});