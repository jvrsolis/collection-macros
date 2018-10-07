<?php

use Illuminate\Support\Collection;

/**
 * Get and remove the first item from the array.
 *
 * @return mixed
 */
Collection::macro('shift', function () {
    return array_shift($this->items);
});