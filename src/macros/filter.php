<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Run a filter over each of the items.
 *
 * @param  callable|null  $callback
 * @return static
 */
Collection::macro('filter', function (callable $callback = null) {
    if ($callback) {
        return new static(Arr::where($this->items, $callback));
    }

    return new static(array_filter($this->items));
});