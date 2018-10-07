<?php

use Illuminate\Support\Collection;

/**
 * Add an "where null" clause to the query.
 *
 * @param  string  $column
 * @return array
 */
Collection::macro('havingNull', function ($column) {
    return $this->having($column, '===', null);
});