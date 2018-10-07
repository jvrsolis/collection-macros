<?php

use Illuminate\Support\Collection;

/**
 * Get the items in the collection whose keys are not present in the given items.
 *
 * @param  mixed   $items
 * @param  callable  $callback
 * @return static
 */
Collection::macro('diffKeysUsing', function ($items, callable $callback) {
    return new static(array_diff_ukey($this->items, $this->getArrayableItems($items), $callback));
});