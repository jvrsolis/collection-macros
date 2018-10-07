<?php

/**
 * An extension to the where methods
 * available in the array.
 *
 * Returns first result found.
 */
Collection::macro('lastHaving', function ($key, $operator, $value = null) {
    if (func_num_args() == 2) {
        $value = $operator;

        $operator = '=';
    }

    return $this->filter($this->operatorForHaving($key, $operator, $value))->last();
});