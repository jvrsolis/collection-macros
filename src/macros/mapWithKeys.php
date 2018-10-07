<?php

use Illuminate\Support\Collection;

/**
 * Run an associative map over each of the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('mapWithKeys', function (callable $callback) {
    $result = [];

    foreach ($this->items as $key => $value) {
        $assoc = $callback($value, $key);

        foreach ($assoc as $mapKey => $mapValue) {
            $result[$mapKey] = $mapValue;
        }
    }

    return new static($result);
});