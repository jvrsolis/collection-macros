<?php

use Illuminate\Support\Collection;

/**
 * Set the item at a given offset.
 *
 * @param  mixed  $key
 * @param  mixed  $value
 * @return void
 */
Collection::macro('offsetSet', function ($key, $value) {
    if (is_null($key)) {
        $this->items[] = $value;
    } else {
        $this->items[$key] = $value;
    }
});