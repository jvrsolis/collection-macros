<?php

use Illuminate\Support\Collection;

/**
 * Convert the array to its string representation.
 *
 * @return string
 */
Collection::macro('toString', function () {
    $function = function (&$array) use (&$function) {
        foreach ($array as $key => $value) {
            $value = strval($value);
        }
        return $array;
    };

    $function($this->items);

    return $this;
});