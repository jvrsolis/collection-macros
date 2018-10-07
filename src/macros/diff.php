<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the array that are not present in the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('diff', function ($items) {
    return new static(array_diff($this->items, $this->getArrayableItems($items)));
});