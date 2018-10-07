<?php

use Illuminate\Support\Collection;

Collection::macro('sumTotal', function ($items) {
    return array_sum($this->items);
});