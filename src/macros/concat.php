<?php

use Illuminate\Support\Collection;

/**
 * Push all of the given items onto the array.
 *
 * @param  \Traversable|array  $source
 * @return self
 */
Collection::macro('concat', function ($source) {
    $result = new static($this);

    foreach ($source as $item) {
        $result->push($item);
    }

    return $result;
});