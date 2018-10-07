<?php

use Illuminate\Support\Collection;

/**
 * Determine if the array is not empty.
 *
 * @return bool
 */
Collection::macro('isNotEmpty', function () {
    return !$this->isEmpty();
});