<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $values
 * @param  bool  $strict
 * @return array
 */
Collection::macro('havingNotIn', function ($key, $values, $strict = false) {
    $values = $this->getArrayableItems($values);

    return $this->reject(function ($item) use ($key, $values, $strict) {
        return in_array(data_get($item, $key), $values, $strict);
    });
});