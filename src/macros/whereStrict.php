<?php

use Illuminate\Support\Collection;

/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return static
 */
Collection::macro('whereStrict', function ($key, $value) {
    return $this->where($key, '===', $value);
});