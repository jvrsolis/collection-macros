<?php

use Illuminate\Support\Collection;

/**
 * Create a array by using this array for keys and another for its values.
 *
 * @param  mixed  $values
 * @return static
 */
Collection::macro('combine', function ($values) {
    return new static(array_combine($this->all(), $this->getArrayableItems($values)));
});