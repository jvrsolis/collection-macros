<?php

use Illuminate\Support\Collection;

/**
 * Search the array for a given value and return the corresponding key if successful.
 *
 * @param  mixed  $value
 * @param  bool  $strict
 * @return mixed
 */
Collection::macro('search', function ($value, $strict = false) {
    if (!$this->useAsCallable($value)) {
        return array_search($value, $this->items, $strict);
    }

    foreach ($this->items as $key => $item) {
        if (call_user_func($value, $item, $key)) {
            return $key;
        }
    }

    return false;
});