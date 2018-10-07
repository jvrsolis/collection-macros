<?php

use Illuminate\Support\Collection;

/**
 * Put an item in the array by key.
 *
 * @param  mixed  $key
 * @param  mixed  $value
 * @return $array
 */
Collection::macro('put', function ($key, $value) {
    $this->offsetSet($key, $value);

    return $this;
});