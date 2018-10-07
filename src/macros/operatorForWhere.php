<?php

use Illuminate\Support\Collection;

/**
 * Get an operator checker callback.
 *
 * @param  string  $key
 * @param  string  $operator
 * @param  mixed  $value
 * @return \Closure
 */
Collection::macro('operatorForWhere', function ($key, $operator, $value) {
    if (func_num_args() === 1) {
        $value = true;

        $operator = '=';
    }

    if (func_num_args() === 2) {
        $value = $operator;

        $operator = '=';
    }

    return function ($item) use ($key, $operator, $value) {
        $retrieved = data_get($item, $key);

        $strings = array_filter([$retrieved, $value], function ($value) {
            return is_string($value) || (is_object($value) && method_exists($value, '__toString'));
        });

        if (count($strings) < 2 && count(array_filter([$retrieved, $value], 'is_object')) == 1) {
            return in_array($operator, ['!=', '<>', '!==']);
        }

        switch ($operator) {
            default:
            case '=':
            case '==':
                return $retrieved == $value;
            case '!=':
            case '<>':
                return $retrieved != $value;
            case '<':
                return $retrieved < $value;
            case '>':
                return $retrieved > $value;
            case '<=':
                return $retrieved <= $value;
            case '>=':
                return $retrieved >= $value;
            case '===':
                return $retrieved === $value;
            case '!==':
                return $retrieved !== $value;
        }
    };

});