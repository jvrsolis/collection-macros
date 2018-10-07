<?php

use Illuminate\Support\Collection;

/**
 * Get an item from the collection using "dot" notation.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
Collection::macro('get', function ($key, $default = null) {
    if ($this->offsetExists($key)) {
        return $this->items[$key];
    }

    return value($default);
});