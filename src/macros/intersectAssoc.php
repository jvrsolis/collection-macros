<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the array whose keys and values are not present in the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('intersectAssoc', function ($items) {
    return array_intersect_assoc($this->getArrayableItems($items));
});