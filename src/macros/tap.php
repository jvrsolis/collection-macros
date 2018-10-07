<?php

use Illuminate\Support\Collection;

/**
 * Pass the array to the given callback and then return it.
 *
 * @param  callable  $callback
 * @return $array
 */
Collection::macro('tap', function (callable $callback) {
    $callback(new static($this->items));

    return $this;
});