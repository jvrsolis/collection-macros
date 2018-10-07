<?php

use Illuminate\Support\Collection;

Collection::macro('exceptEmpty', function () {
    return $this->filter(function ($item) {
        return !empty($item);
    })->values();
});