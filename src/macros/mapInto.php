<?php

use Illuminate\Support\Collection;

/**
 * Map the values into a new class.
 *
 * @param  string  $class
 * @return static
 */
Collection::macro('mapInto', function ($class) {
    return $this->map(function ($value, $key) use ($class) {
        return new $class($value, $key);
    });
});