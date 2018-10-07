<?php

use Illuminate\Support\Collection;

/**
 * Sort the collection keys.
 *
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */
Collection::macro('sortKeys', function ($items, $options = SORT_REGULAR, $descending = false) {

    $items = $this->items;

    $descending ? krsort($items, $options) : ksort($items, $options);

    return new static($items);
});