<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

/**
 * Dump the collection.
 *
 * @return $this
 */
Collection::macro('dump', function () {
    $made = Arr::make(array_slice(func_get_args(), 1));
    $pushed = Arr::push($made);
    $result = Arr::each($pushed, function ($item) {
        (new Dumper)->dump($item);
    });

    return $result;
});