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
Collection::macro('havingFirst', function ($key, $operator, $value = null) {
    return $this->filter($this->operatorForHaving($key, $operator, $value))->first();
});