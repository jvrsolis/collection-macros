<?php

use Illuminate\Support\Collection;

/**
 * An extension to the where methods
 * available in the array.
 *
 * Returns first result found.
 */
Collection::macro('firstHaving', function ($key, $operator, $value = null) {
    return $this->filter($this->operatorForHaving($key, $operator, $value))->first();
});