<?php

use Illuminate\Support\Collection;

Collection::macro('uppercase', function () {
    return collect($this->items)->map(function ($item) {
        return strtoupper($item);
    });
});