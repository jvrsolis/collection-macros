<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return static
 */
Collection::macro('havingStrict', function ($key, $value) {
    return $this->having($key, '===', $value);
});