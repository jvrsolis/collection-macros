<?php

use Illuminate\Support\Collection;

/**
 * Sort the array in descending order using the given callback.
 *
 * @param  callable|string  $callback
 * @param  int  $options
 * @return static
 */
Collection::macro('sortByDesc', function ($callback, $options = SORT_REGULAR) {
    return $this->sortBy($callback, $options, true);
});