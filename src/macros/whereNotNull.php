<?php

use Illuminate\Support\Collection;

/**
 * Add a "where not null" clause to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @return array
 */
Collection::macro('whereNotNull', function ($column) {
    return $this->where($column, '!==', null);
});