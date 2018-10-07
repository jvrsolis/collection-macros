<?php

use Illuminate\Support\Collection;

/**
 * Determine if an item exists in the array.
 *
 * @param  mixed  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */
Collection::macro('contains', function ($key, $operator = null, $value = null) {
    if (func_num_args() === 1) {
        if ($this->useAsCallable($key)) {
            $placeholder = new stdClass;

            return $this->first($key, $placeholder) !== $placeholder;
        }

        return in_array($key, $this->items);
    }

    return $this->contains($this->operatorForWhere(...func_get_args()));
});