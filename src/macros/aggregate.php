<?php

use Illuminate\Support\Collection;

/**
 * Call an aggregate function on an array.
 *
 * @param array $array
 * @param string $aggregate
 * @return array
 */
Collection::macro('aggregate', function ($aggregate) {
    if (is_callable($aggregate)) {
        return $aggregate();
    }
    if (strtolower($aggregate) == 'sum') {
        return $this->sum();
    } elseif (strtolower($aggregate) == 'count') {
        return $this->count();
    } elseif (strtolower($aggregate) == 'max') {
        return $this->max();
    } elseif (strtolower($aggregate) == 'min') {
        return $this->min();
    } elseif (strtolower($aggregate) == 'avg') {
        return $this->avg();
    } else {
        return $array;
    }
});