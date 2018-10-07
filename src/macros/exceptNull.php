<?php

use Illuminate\Support\Collection;

Collection::macro('exceptNull', function () {
    return $this->filter(function ($item) {
        return !is_null($item);
    })->values();
});