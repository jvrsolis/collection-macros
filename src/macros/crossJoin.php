<?php

use Illuminate\Support\Collection;

/**
 * Cross join the given arrays,
 * returning all possible permutations.
 *
 * @param  array  ...$arrays
 * @return array
 */
Collection::macro('crossJoin', function (...$lists) {
    return new static(Arr::crossJoin(
        $this->items,
        ...array_map([$this, 'getArrayableItems'], $lists)
    ));
});