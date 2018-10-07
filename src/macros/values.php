<?php

use Illuminate\Support\Collection;

/**
 * Reset the keys on the array.
 *
 * @return static
 */
Collection::macro('values', function () {
    return new static(array_values($this->items));
});