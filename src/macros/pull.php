<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Get a value from the array, and remove it.
 *
 * @param  array   $array
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
Collection::macro('pull', function ($key, $default = null) {
    return Arr::pull($this->items, $key, $default);
});