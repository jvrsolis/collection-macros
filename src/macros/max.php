<?php

use Illuminate\Support\Collection;

/**
 * Get the max value of a given key.
 *
 * @param  callable|string|null  $callback
 * @return mixed
 */
Collection::macro('max', function ($callback = null) {
    $callback = $this->valueRetriever($callback);

    return $this->filter(function ($value) {
        return !is_null($value);
    })->reduce(function ($result, $item) use ($callback) {
        $value = $callback($item);

        return is_null($result) || $value > $result ? $value : $result;
    });
});