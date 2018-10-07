<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */
Collection::macro('having', function ($key, $operator, $value = null) {
    if (func_num_args() == 3) {
        $value = $operator;

        $operator = '=';
    }

    return $this->filter($this->operatorForHaving($key, $operator, $value));
});