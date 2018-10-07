<?php

use Illuminate\Support\Collection;

/**
 * Pass the collection to the given callback and return the result.
 *
 * @param  callable $callback
 * @return mixed
 */
Collection::macro('pipe', function (callable $callback) {
    return $callback($this);
});