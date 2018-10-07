<?php

use Illuminate\Support\Collection;

/**
 * Get a single column's value from the first result of a query.
 *
 * @param  string  $column
 * @return mixed
 */
Collection::macro('value', function ($column) {
    if ($result = $this->first([$column])) {
        return $result->{$column};
    }
});