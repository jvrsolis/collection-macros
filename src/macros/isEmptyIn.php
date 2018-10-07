<?php

use Illuminate\Support\Collection;

/**
 * Determine if the given key exists in the provided array.
 *
 * @param  \CollectionAccess|array  $array
 * @param  string|int  $key
 * @return bool
 */
Collection::macro('isEmptyIn', function ($keys) {
    $isEmptyIn = false;

    foreach ($keys as $key) {
        if ($isEmptyIn == true) {
            break;
        }

        $isEmptyIn = $isEmptyIn || $this->isEmptyAt($key);
    }

    return $isEmptyIn;
});