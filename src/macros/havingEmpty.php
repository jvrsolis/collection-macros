<?php

use Illuminate\Support\Collection;

Collection::macro('havingEmpty', function () {
    return $this->filter(function ($value) use ($column) {
        return empty(data_get($value, $column));
    });
});