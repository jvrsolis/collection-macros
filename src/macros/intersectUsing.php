<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the array whose keys and values are not present in the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('intersectUsing', function ($items) {
    return array_uintersect($items, $$this->getArrayableItems($items), $callback);
});