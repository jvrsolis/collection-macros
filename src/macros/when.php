<?php

use Illuminate\Support\Collection;

/**
 * Apply the callback if the value is truthy.
 *
 * @param  bool  $value
 * @param  callable  $callback
 * @param  callable  $default
 * @return mixed
 */
Collection::macro('when', function (bool $value, callable $callback, callable $default = null) {
    if ($value) {
        return $callback($this, $value);
    } elseif ($default) {
        return $default($this, $value);
    }

    return $this;
});