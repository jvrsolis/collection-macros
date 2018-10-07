<?php

use Illuminate\Support\Collection;

/*
 * Dump the contents of the array and terminate the script.
 */
Collection::macro('toCollectionRecursive', function () {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $value = $this->toCollection($value);
            $array[$key] = $value;
        }
    }
    return collect($array);
});