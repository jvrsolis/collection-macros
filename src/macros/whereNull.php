<?php

use Illuminate\Support\Collection;

/**
 * Add an "where null" clause to the query.
 *
 * @param  string  $column
 * @return array
 */
Collection::macro('whereNull', function ($column) {
    return $this->where($column, '===', null);
});