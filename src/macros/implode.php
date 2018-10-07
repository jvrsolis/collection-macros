<?php

use Illuminate\Support\Collection;

/**
 * Concatenate values of an array.
 *
 * @param  string  $value
 * @param  string  $glue
 * @return string
 */
Collection::macro('implode', function ($glue = '') {
    $first = $this->first();

    if (is_array($first) || is_object($first)) {
        return implode($glue, $this->pluck($value)->all());
    }

    return implode($value, $this->items);
});