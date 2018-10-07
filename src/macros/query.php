<?php

use Illuminate\Support\Collection;

/**
 * Convert the array into a query string.
 *
 * @param  array  $array
 * @return string
 */
Collection::macro('query', function () {
    return http_build_query($this->items, null, '&', PHP_QUERY_RFC3986);
});