<?php

use Illuminate\Support\Collection;

/**
 * Get the average value of a given key.
 *
 * @param  callable|string|null  $callback
 * @return mixed
 */
Collection::macro('avg', function ($callback = null) {
    $callback = $this->valueRetriever($callback);

    $items = $this->map(function ($value) use ($callback) {
        return $callback($value);
    })->filter(function ($value) {
        return !is_null($value);
    });

    if ($count = $items->count()) {
        return $items->sum() / $count;
    }
});