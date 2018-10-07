<?php

use Illuminate\Support\Collection;

/**
 * Execute a callable if the array isn't empty, then return the array.
 *
 * @param callable callback
 * @return \Illuminate\Support\Collection
 */
Collection::macro('ifAny', function (callable $callback) {
    if (!$this->isEmpty()) {
        $callback($this);
    }
    return $this;
});