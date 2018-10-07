<?php

use Illuminate\Support\Collection;

/**
 * Run a dictionary map over the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('mapToDictionary', function ($items, callable $callback) {
    $dictionary = [];

    foreach ($this->items as $key => $item) {
        $pair = $callback($item, $key);

        $key = key($pair);

        $value = reset($pair);

        if (!isset($dictionary[$key])) {
            $dictionary[$key] = [];
        }

        $dictionary[$key][] = $value;
    }

    return new static($dictionary);
});