<?php

use Illuminate\Support\Collection;

/**
 * Map an array, then filter the results.
 *
 * @param callable $map
 * @param callable $filter
 *
 * @return array
 */
Collection::macro('filterMap', function ($map, $filter = null) {
    $mapped = $this->map($map);
    return $this->filter($filter);
});