<?php

use Illuminate\Support\Collection;

/**
 * Add an "where null" clause to the query.
 *
 * @param  string  $column
 * @return array
 */
Collection::macro('havingNotEmpty', function ($column) {
    return $this->filter(function ($value) use ($column) {
        return !empty(data_get($value, $column));
    });
});