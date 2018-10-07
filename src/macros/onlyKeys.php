<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Get a subset of the items from an array given the keys.
 *
 * @param  array  $array
 * @param  array|string  $keys
 * @return array
 */
Collection::macro('onlyKeys', function ($keys) {
    if (is_null($keys)) {
        return new static($this->items);
    }

    if ($keys instanceof self) {
        $keys = $keys->all();
    }

    $keys = is_array($keys) ? $keys : func_get_args();

    return new static(Arr::only($this->items, $keys));
});