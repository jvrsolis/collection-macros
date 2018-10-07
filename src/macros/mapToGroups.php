<?php

use Illuminate\Support\Collection;

/**
 * Run a grouping map over the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('mapToGroups', function (callable $callback) {
    $groups = $this->mapToDictionary($callback);

    return $groups->map([$this, 'make']);
});