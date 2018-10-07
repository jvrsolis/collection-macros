<?php

use Illuminate\Support\Collection;

/**
 * Flip the items in the array.
 *
 * @return array
 */
Collection::macro('flip', function () {
    return new static(array_flip($this->items));
});