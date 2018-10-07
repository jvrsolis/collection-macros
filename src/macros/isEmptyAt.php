<?php

use Illuminate\Support\Collection;

/**
 * Determine if the given key exists in the provided array.
 *
 * @param  \CollectionAccess|array  $array
 * @param  string|int  $key
 * @return bool
 */
Collection::macro('isEmptyAt', function ($key) {
    if ($array instanceof CollectionAccess) {
        return $array->offsetExists($key) && empty($array[$key]);
    }

    return array_key_exists($key, $array) && empty($array[$key]);
});