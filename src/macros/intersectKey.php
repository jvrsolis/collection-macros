<?php

use Illuminate\Support\Collection;

/**
 * Intersect the array with the given items by key.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('intesectKey', function ($items) {
    return new static(array_intersect_key(
        $this->items,
        $this->getArrayableItems($items)
    ));
});