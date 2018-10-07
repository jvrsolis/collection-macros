<?php

use Illuminate\Support\Collection;

Collection::macro('sumValue', function ($value) {

    $value = $this->valueRetriever($value);

    return $this->map(function ($item) use ($value) {
        return $item + $value;
    });
});