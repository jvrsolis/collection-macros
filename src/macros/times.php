<?php

use Illuminate\Support\Collection;

/**
 * Create a new array by invoking the callback a given number of times.
 *
 * @param  int  $number
 * @param  callable  $callback
 * @return static
 */
Collection::macro('times', function (int $number, callable $callback = null) {
    if ($number < 1) {
        return new static;
    }

    if (is_null($callback)) {
        return new static(range(1, $number));
    }

    return (new static(range(1, $number)))->map($callback);
});