<?php

use Illuminate\Support\Collection;

/**
 * Add an element to an array using "dot" notation if it doesn't exist.
 *
 * @param  array   $array
 * @param  string  $key
 * @param  mixed   $value
 * @return array
 */
Collection::macro('add', function ($key, $value) {
    if (is_null($this->get($key))) {
        $this->set($key, $value);
    }

    return $this;
});
