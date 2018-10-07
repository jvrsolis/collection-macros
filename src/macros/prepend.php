<?php

use Illuminate\Support\Collection;

/**
 * Push an item onto the beginning of an array.
 *
 * @param  array  $array
 * @param  mixed  $value
 * @param  mixed  $key
 * @return array
 */
Collection::macro('prepend', function ($value, $key = null) {
    $this->items = Arr::prepend($this->items, $value, $key);

    return $this;
});