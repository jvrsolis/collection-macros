<?php

use Illuminate\Support\Collection;

/**
 * Determine if an item exists at an offset.
 *
 * @param  mixed  $key
 * @return bool
 */
Collection::macro('offsetExists', function ($key) {
    return array_key_exists($key, $array);
});