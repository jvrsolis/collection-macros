<?php

use Illuminate\Support\Collection;

Collection::macro('combinations', function ($combineWith, $keys = [0, 1]) {
    return $this->reduce(function ($combinations, $originalItem) use ($combineWith, $keys) {
        return $combinations->push($combineWith->map(function ($otherItem) use ($originalItem, $keys) {
            return [$keys[0] => $originalItem, $keys[1] => $otherItem];
        }));
    }, new static)
        ->flatten(1);
});