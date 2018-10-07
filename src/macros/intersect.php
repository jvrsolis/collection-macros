<?php

use Illuminate\Support\Collection;

/**
 * Intersect the array with the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('intersect', function ($items) {
    return new static(array_intersect($this->items, $this->getArrayableItems($items)));
});