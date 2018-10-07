<?php

use Illuminate\Support\Collection;

/**
 * Get a value retrieving callback.
 *
 * @param  string  $value
 * @return callable
 */
Collection::macro('valueRetriever', function ($value) {
    if ($this->useAsCallable($value)) {
        return $value;
    }

    return function ($item) use ($value) {
        return data_get($item, $value);
    };
});