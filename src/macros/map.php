<?php

use Illuminate\Support\Collection;

/**
 * Run a map over each of the items.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('map', function (callable $callback) {
    $keys = array_keys($this->items);

    $items = array_map($callback, $this->items, $keys);

    return new static(array_combine($keys, $items));
});