<?php

use Illuminate\Support\Collection;

/**
 * Expands a dotted associative array. The inverse of $this->dot().
 *
 * @param  array $array
 * @return array
 */
Collection::macro('undot', function () {
    $return = [];
    foreach ($array as $key => $value) {
        $this->set($return, $key, $value);
    }
    return $return;
});