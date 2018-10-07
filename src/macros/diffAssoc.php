<?php


use Illuminate\Support\Collection;

/**
 * Get the items in the collection whose keys and values are not present in the given items.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('diffAssoc', function ($items) {
    return new static(array_diff_assoc($this->items, $this->getArrayableItems($items)));
});