<?php

use Illuminate\Support\Collection;

/**
 * Get a subset of the items from the given array.
 *
 * @param  array         $array
 * @param  array|string  $items
 * @param  bool          $keys
 * @return array
 */
Collection::macro('only', function ($items, $keys = true) {
    if ($keys) {
        return $this->onlyKeys($items);
    }
    return $this->onlyValues($items);
});