<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the collection whose keys and values are not present in the given items.
 *
 * @param  mixed  $items
 * @param  callable  $callback
 * @return static
 */
Collection::macro('diffAssocUsing', function ($items, callable $callback) {
    return new static(array_diff_uassoc($this->items, $this->getArrayableItems($items), $callback));
});