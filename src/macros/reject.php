<?php

use Illuminate\Support\Collection;

/**
 * Create a array of all elements that do not pass a given truth test.
 *
 * @param  callable|mixed  $callback
 * @return static
 */
Collection::macro('reject', function ($callback) {
    if ($this->useAsCallable($callback)) {
        return $this->filter(function ($value, $key) use ($callback) {
            return !$callback($value, $key);
        });
    }

    return $this->filter(function ($item) use ($callback) {
        return $item != $callback;
    });
});