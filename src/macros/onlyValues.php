<?php

use Illuminate\Support\Collection;

/**
 * Get a subset of the items from an array given the values.
 *
 * @param  array  $array
 * @param  array|string  $keys
 * @return array
 */
Collection::macro('onlyValues', function ($values) {
    return $this->intersect($values);
});