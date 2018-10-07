<?php

use Illuminate\Support\Collection;

/**
 * Get the median of a given key.
 *
 * @param  null $key
 * @return mixed
 */
Collection::macro('median', function ($key = null) {
    $values = (isset($key) ? $this->pluck($key) : $this)
        ->filter(function ($item) {
            return !is_null($item);
        })->sort()->values();

    $count = $values->count();

    if ($count == 0) {
        return;
    }

    $middle = (int)($count / 2);

    if ($count % 2) {
        return $values->get($middle);
    }

    return (new static([
        $values->get($middle - 1), $values->get($middle),
    ]))->average();
});