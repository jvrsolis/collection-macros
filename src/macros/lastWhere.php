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
Collection::macro('lastWhere', function ($key, $operator, $value = null) {
    if (func_num_args() == 2) {
        $value = $operator;

        $operator = '=';
    }

    return $this->filter($this->operatorForWhere($key, $operator, $value))->last();
});