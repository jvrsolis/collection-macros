<?php

use Illuminate\Support\Collection;

/**
 * Apply the callback if the value is falsy.
 *
 * @param  bool  $value
 * @param  callable  $callback
 * @param  callable  $default
 * @return mixed
 */
Collection::macro('unless', function (bool $value, callable $callback, callable $default = null) {
    return $this->when(!$value, $callback, $default);
});