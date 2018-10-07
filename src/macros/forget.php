<?php

use Illuminate\Support\Collection;

/**
 * Remove one or many array items from a given array using "dot" notation.
 *
 * @param  array|string  $keys
 * @return void
 */
Collection::macro('forget', function ($keys) {
    foreach ((array)$keys as $key) {
        $this->offsetUnset($key);
    }

    return $this;
});