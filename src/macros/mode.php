<?php

use Illuminate\Support\Collection;

/**
 * Get the mode of a given key.
 *
 * @param  mixed  $key
 * @return array|null
 */
Collection::macro('mode', function ($key = null) {
    if ($this->count() == 0) {
        return;
    }

    $collection = isset($key) ? $this->pluck($key) : $this;

    $counts = new self;

    $collection->each(function ($value) use ($counts) {
        $counts[$value] = isset($counts[$value]) ? $counts[$value] + 1 : 1;
    });

    $sorted = $counts->sort();

    $highestValue = $sorted->last();

    return $sorted->filter(function ($value) use ($highestValue) {
        return $value == $highestValue;
    })->sort()->keys()->all();
});