<?php

use Illuminate\Support\Collection;

/**
 * Splice a portion of the array.
 *
 * @param  int  $offset
 * @param  int|null  $length
 * @param  mixed  $replacement
 * @return static
 */
Collection::macro('splice', function ($offset, $length = null, $replacement = []) {
    if (func_num_args() === 1) {
        return new static(array_splice($this->items, $offset));
    }

    return new static(array_splice($this->items, $offset, $length, $replacement));
});