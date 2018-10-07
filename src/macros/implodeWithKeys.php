<?php

use Illuminate\Support\Collection;

/**
 * Concatenate values of a given key as a string.
 *
 * @param  string  $value
 * @param  string  $glue
 * @return string
 */
Collection::macro('implodeWithKeys', function ($value, $glue = null) {
    $first = $this->first($array);

    if (is_array($first) || is_object($first)) {
        return implode($glue, $this->pluck($value));
    }

    return implode($value, $array);
});