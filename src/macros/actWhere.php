<?php

use Illuminate\Support\Collection;

/**
 * Pass the collection to the given callback and return the result.
 *
 * @param  callable $callback
 * @return mixed
 */
Collection::macro('actWhere', function ($key, $operator, $value = null, $operate = null) {
    if (func_num_args() === 3) {
        $operate = $value;
        $value = $operator;
        $operator = '=';
    }

    $compare = $this->operatorForHaving($key, $operator, $value); // Get value from key, check value against needle;

    $result = [];

    foreach ($items as $key => $item) {
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