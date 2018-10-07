<?php

use Illuminate\Support\Collection;

/**
 * Determine if all items in the array pass the given test.
 *
 * @param  string|callable  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */
Collection::macro('every', function ($key, $operator = null, $value = null) {
    if (func_num_args() === 1) {
        $callback = $this->valueRetriever($key);

        foreach ($this->items as $k => $v) {
            if (!$callback($v, $k)) {
                return false;
            }
        }

        return true;
    }

    return $this->every($this->operatorForWhere(...func_get_args()));
});