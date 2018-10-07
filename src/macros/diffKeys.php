<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the collection whose keys are not present in the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('diffKeys', function ($items) {
    return new static(array_diff_key($this->items, $this->getArrayableItems($items)));
});