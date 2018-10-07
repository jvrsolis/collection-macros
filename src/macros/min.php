<?php

use Illuminate\Support\Collection;

/**
 * Get the min value of a given key.
 *
 * @param  callable|string|null  $callback
 * @return mixed
 */
Collection::macro('min', function ($callback = null) {
    $callback = $this->valueRetriever($callback);

    return $this->map(function ($value) use ($callback) {
        return $callback($value);
    })->filter(function ($value) {
        return !is_null($value);
    })->reduce(function ($result, $value) {
        return is_null($result) || $value < $result ? $value : $result;
    });
});