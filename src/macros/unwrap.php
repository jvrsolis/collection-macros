<?php

use Illuminate\Support\Collection;

/**
 * Get the underlying items from the given collection if applicable.
 *
 * @param  array|static  $value
 * @return array
 */
Collection::macro('unwrap', function ($value) {
    return $value instanceof self ? $value->all() : $value;
});