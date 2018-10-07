<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $values
 * @return array
 */
Collection::macro('whereInStrict', function ($key, $value) {
    return $this->whereIn($key, $values, true);
});