<?php

use Illuminate\Support\Collection;

/**
 * Get the last item from the collection.
 *
 * @param  callable|null  $callback
 * @param  mixed  $default
 * @return mixed
 */
Collection::macro('last', function (callable $callback = null, $default = null) {
    return Arr::last($this->items, $callback, $default);
});