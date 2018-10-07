<?php

use Illuminate\Support\Collection;

/**
 * Determine whether the given value is array accessible.
 *
 * @param  mixed  $value
 * @return bool
 */
Collection::macro('isAccessible', function ($value) {
    return is_array($value) || $value instanceof CollectionAccess;
});