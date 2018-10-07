<?php

use Illuminate\Support\Collection;

/**
 * Merge the array with the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('merge', function ($items) {
    return new static(array_merge($this->items, $this->getArrayableItems($items)));
});