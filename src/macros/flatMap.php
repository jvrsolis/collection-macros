<?php

use Illuminate\Support\Collection;

/**
 * Map a array and flatten the result by a single level.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('flatMap', function (callable $callback) {
    return $this->map($callback)->collapse();
});