<?php

use Illuminate\Support\Collection;

/**
 * Determine if the given value is callable, but not a string.
 *
 * @param  mixed  $value
 * @return bool
 */
Collection::macro('useAsCallable', function ($value) {
    return !is_string($value) && is_callable($value);
});