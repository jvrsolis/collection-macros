<?php

use Illuminate\Support\Collection;

/**
 * Return only unique items from the array array using strict comparison.
 *
 * @param  string|callable|null  $key
 * @return static
 */
Collection::macro('uniqueStrict', function () {
    return $this->unique($key, true);
});