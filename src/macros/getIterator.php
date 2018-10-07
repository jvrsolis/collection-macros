<?php

use Illuminate\Support\Collection;

/**
 * Get an iterator for the items.
 *
 * @return \ArrayIterator
 */
Collection::macro('getIterator', function () {
    return new ArrayIterator($this->items);
});