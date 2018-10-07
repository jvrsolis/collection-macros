<?php

use Illuminate\Support\Collection;

/**
 * Reverse keys of an array.
 *
 * @return array
 */
Collection::macro('reverseKeys', function () {
    return array_reverse(array_reverse(true), false);
});