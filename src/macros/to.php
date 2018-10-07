<?php

use Illuminate\Support\Collection;

/**
 * Expands a dotted associative array. The inverse of $this->dot().
 *
 * @param  array $array
 * @return array
 */
Collection::macro('to', function ($key, $mixed) {
    $array = $this->get($key);
    if (is_array($array)) {
        $this->set($key, array_push($mixed));
    } else {
        $this->set($key, $mixed);
    }
});