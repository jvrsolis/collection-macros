<?php

use Illuminate\Support\Collection;

/**
 * Get the keys of the array items.
 *
 * @return static
 */
Collection::macro('keys', function () {
    return new static(array_keys($this->items));
});