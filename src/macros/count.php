<?php

use Illuminate\Support\Collection;

/**
 * Count the number of items in the array.
 *
 * @var    array
 * @return int
 */
Collection::macro('count', function () {
    return count($this->items);
});