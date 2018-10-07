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
Collection::macro('where', function ($key, $operator, $value = null) {
    return $this->filter($this->operatorForWhere(...func_get_args()));
});