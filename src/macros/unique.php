<?php

use Illuminate\Support\Collection;

/**
 * Return only unique items from the array array.
 *
 * @param  string|callable|null  $key
 * @param  bool  $strict
 * @return static
 */
Collection::macro('unique', function ($key = null, $strict = false) {
    $callback = $this->valueRetriever($key);

    $exists = [];

    return $this->reject(function ($item, $key) use ($callback, $strict, &$exists) {
        if (in_array($id = $callback($item, $key), $exists, $strict)) {
            return true;
        }

        $exists[] = $id;
    });
});