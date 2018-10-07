<?php

use Illuminate\Support\Collection;

/**
 * Slice the array having associative keys.
 *
 * @param  int  $offset
 * @param  int  $length
 * @return static
 */
Collection::macro('sliceAssoc', function (array $keys) {
    return array_intersect_key(array_flip($keys));
});