<?php

use Illuminate\Support\Collection;

/**
 * Check if an item or items exist in the collection
 * using "dot" notation.
 *
 * @param  string|array  $keys
 * @return bool
 */
Collection::macro('has', function ($keys) {
    $keys = is_array($key) ? $key : func_get_args();

    foreach ($keys as $value) {
        if (!$this->offsetExists($value)) {
            return false;
        }
    }

    return true;
});