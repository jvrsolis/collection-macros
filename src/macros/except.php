<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

Collection::macro('except', function ($keys) {
    if ($keys instanceof self) {
        $keys = $keys->all();
    } elseif (!is_array($keys)) {
        $keys = func_get_args();
    }

    return new static(Arr::except($this->items, $keys));
});