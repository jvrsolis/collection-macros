<?php

use Illuminate\Support\Collection;

/**
 * Execute a callable if the array is empty, then return the array.
 *
 * @param callable $callback
 *
 * @return \Illuminate\Support\Collection
 */
Collection::macro('ifEmpty', function (callable $callback) {
    if ($this->isEmpty()) {
        $callback($this);
    }
    return $this;
});