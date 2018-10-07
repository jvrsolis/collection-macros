<?php

use Illuminate\Support\Collection;

/**
 * Unset the item at a given offset.
 *
 * @param  string  $key
 * @return void
 */
Collection::macro('offsetUnset', function ($key) {
    unset($this->items[$key]);
});