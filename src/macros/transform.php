<?php

use Illuminate\Support\Collection;

/**
 * Determine if the given value is callable, but not a string.
 *
 * @param  mixed  $value
 * @return bool
 */
Collection::macro('transform', function (callable $callback) {
    $this->items = $this->map($callback)->all();

    return $this;
});