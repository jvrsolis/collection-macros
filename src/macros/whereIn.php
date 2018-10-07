<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $values
 * @param  bool  $strict
 * @return static
 */
Collection::macro('whereIn', function ($key, $values, $strict = false) {
    $values = $this->getArrayableItems($values);

    return $this->filter(function ($item) use ($key, $values, $strict) {
        return in_array(data_get($item, $key), $values, $strict);
    });
});