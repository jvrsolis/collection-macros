<?php

use Illuminate\Support\Collection;

/**
 * Determine if the given key exists in the provided array.
 *
 * @param  \CollectionAccess|array  $array
 * @param  string|int  $key
 * @return bool
 */
Collection::macro('isNotEmptyIn', function ($keys) {
    $isNotEmptyIn = true;

    foreach ($keys as $key) {
        if ($isNotEmptyIn == false) {
            break;
        }
        $isNotEmptyIn = $isNotEmptyIn && $this->isNotEmptyAt($key);
    }

    return $isNotEmptyIn;
});