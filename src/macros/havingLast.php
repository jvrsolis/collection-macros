<?php

use Illuminate\Support\Collection;

/**
 * Get the first item by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */
Collection::macro('havingLast', function ($key, $operator, $value = null) {
    $args = array_slice(func_get_args(), 1);
    return $this->last($this->operatorForWhere(...$args()));
});