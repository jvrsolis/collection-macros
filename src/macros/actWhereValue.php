<?php

use Illuminate\Support\Collection;

/**
 * Pass the collection to the given callback and return the result.
 *
 * @param  callable $callback
 * @return mixed
 */
Collection::macro('actWhereValue', function ($operator, $value, $operate = null) {
    if (func_num_args() === 2) {
        $value = $operator;
        $operator = '=';
    }

    $compare = $this->operatorForHaving(null, $operator, $value); // Get value from key, check value against needle;

    $result = [];

    foreach ($this->items as $key => $item) {
        if ($compare($item, $key)) {
            if (is_null($operate)) {
                $result[$key] = $item;
                continue;
            }

            $result[$key] = $operate($item, $key);
        }
    }

    return $result;
});