<?php

use Illuminate\Support\Collection;

/**
 * Alias for the "avg" method.
 *
 * @param  callable|string|null  $callback
 * @return mixed
 */
Collection::macro('average', function ($callback = null) {
    return $this->avg($callback);
});