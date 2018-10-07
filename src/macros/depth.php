<?php

use Illuminate\Support\Collection;

/**
 * Return the depth of the array.
 */
Collection::macro('depth', function () {
    $max_depth = 1;

    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = $this->depth($value) + 1;

            if ($depth > $max_depth) {
                $max_depth = $depth;
            }
        }
    }

    return $max_depth;
});