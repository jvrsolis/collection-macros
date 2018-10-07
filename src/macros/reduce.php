<?php

use Illuminate\Support\Collection;

/**
 * Reduce the array to a single value.
 *
 * @param  callable  $callback
 * @param  mixed  $initial
 * @return mixed
 */
Collection::macro('reduce', function (callable $callback, $initial = null) {
    return array_reduce($this->items, $callback, $initial);
});