<?php

use Illuminate\Support\Collection;

/**
 * Transpose an array.
 *
 * @return array
 *
 * @throws \LengthException
 */
Collection::macro('transposeStrict', function () {
    $values = $this->values($array);
    $expectedLength = count($this->first($array));
    $diffLength = count(array_intersect_key(...$values));
    if ($expectedLength !== $diffLength) {
        throw new \LengthException("Element's length must be equal.");
    }
    $items = array_map(function (...$items) {
        return $items;
    }, ...$values);
    return $items;
});