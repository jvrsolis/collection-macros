<?php

use Illuminate\Support\Collection;

/**
 * Determine if the array is empty or not.
 *
 * @return bool
 */
Collection::macro('isEmpty', function () {
    return empty($this->items);
});