<?php

use Illuminate\Support\Collection;

/**
 * Get an item at a given offset.
 *
 * @param  mixed  $key
 * @return mixed
 */
Collection::macro('offsetGet', function ($key) {
    return $this->items[$key];
});