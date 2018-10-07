<?php

use Illuminate\Support\Collection;

Collection::macro('first', function (callable $callback = null, $default = null) {
    return Arr::first($this->items, $callback, $default);
});