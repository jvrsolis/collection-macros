<?php

use Illuminate\Support\Collection;

Collection::macro('mergeFlat', function ($callback) {
    return $this->merge(
        $array,
        $this->flatMap(function ($item) use ($callback) {
            return $callback($item);
        })
    );
});