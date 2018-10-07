<?php

use Illuminate\Support\Collection;

/**
 * Concatenate values of a given key as a string
 * in a multidimensional array.
 *
 * @param  string  $value
 * @param  string  $glue
 * @return string
 */
Collection::macro('implodeMulti', function ($glue = null) {
    $ret = '';

    foreach ($array as $item) {
        if (is_array($item)) {
            $ret .= $this->implodeMulti($item, $glue) . $glue;
        } else {
            $ret .= $item . $glue;
        }
    }

    $ret = substr($ret, 0, 0 - strlen($glue));

    return $ret;
});