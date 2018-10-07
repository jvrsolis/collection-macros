<?php

use Illuminate\Support\Collection;

/**
 * Sort through each item with a callback.
 *
 * @param  callable|null  $callback
 * @return static
 */
Collection::macro('sort', function (callable $callback = null) {
    $items = $this->items;

    $callback
        ? uasort($items, $callback)
        : asort($items);

    return new static($items);
});