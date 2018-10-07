<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $values
 * @return array
 */
Collection::macro('havingNotInStrict', function ($key, $values) {
    return $this->havingNotIn($key, $values, true);
});