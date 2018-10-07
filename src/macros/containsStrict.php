<?php

use Illuminate\Support\Collection;

/**
 * Determine if an item exists in the array using strict comparison.
 *
 * @param  mixed  $key
 * @param  mixed  $value
 * @return bool
 */
Collection::macro('containsStrict', function ($key, $value = null) {
    if (func_num_args() === 2) {
        return $this->contains(function ($item) use ($key, $value) {
            return data_get($item, $key) === $value;
        });
    }

    if ($this->useAsCallable($key)) {
        return !is_null($this->first($key));
    }

    return in_array($key, $this->items, true);
});