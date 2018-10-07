<?php

use Illuminate\Support\Collection;

/**
 * Pad collection to the specified length with a value.
 *
 * @param  int  $size
 * @param  mixed  $value
 * @return static
 */
Collection::macro('pad', function ($size, $value) {
    return new static(array_pad($this->items, $size, $value));
});