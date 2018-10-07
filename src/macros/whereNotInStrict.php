<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $values
 * @return array
 */
Collection::macro('whereNotInStrict', function ($key, $values) {
    return $this->whereNotIn($key, $values, true);
});