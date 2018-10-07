<?php

use Illuminate\Support\Collection;

/**
 * Push an item onto the end of the array.
 *
 * @param  mixed  $value
 * @return $array
 */
Collection::macro('push', function ($value) {
    $this->offsetSet(null, $value);

    return $this;
});