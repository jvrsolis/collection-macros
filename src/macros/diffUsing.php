<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the collection that are not present in the given items.
 *
 * @param  mixed  $items
 * @param  callable  $callback
 * @return static
 */
Collection::macro('diffUsing', function ($items, callable $callback) {
    return new static(array_udiff($this->items, $this->getArrayableItems($items), $callback));
});