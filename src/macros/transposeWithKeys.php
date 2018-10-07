<?php

use Illuminate\Support\Collection;

/**
 * Transpose (flip) a array matrix (array of arrays) while keeping its columns and row headers intact.
 *
 * Please note that a row missing a column another row does have can only occur for one column. It cannot
 * parse more than one missing column.
 */
Collection::macro('transposeWithKeys', function (array $rows = null) {
    $rows = $rows ?? $this->values()->reduce(function (array $rows, array $values) {
        return array_unique(array_merge($rows, array_keys($values)));
    }, []);
    $keys = $this->keys()->toArray();
        // Transpose the matrix
    $items = array_map(function (...$items) use ($keys) {
            // The collection's keys now become column headers
        return array_combine($keys, $items);
    }, ...$this->values());
        // Add the new row headers
    $items = array_combine($rows, $items);
    return new static($items);
});