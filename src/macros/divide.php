<?php

use Illuminate\Support\Collection;

/**
 * Divide an array into two arrays. One with keys and the other with values.
 *
 * @param  array  $array
 * @return array
 */
Collection::macro('divide', function () {
    return [array_keys($array), array_values($array)];
});