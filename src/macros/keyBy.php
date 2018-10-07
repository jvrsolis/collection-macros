<?php

use Illuminate\Support\Collection;

/**
 * Key an associative array by a field or using a callback.
 *
 * @param  callable|string  $keyBy
 * @return static
 */
Collection::macro('keyBy', function ($keyBy) {
    $keyBy = $this->valueRetriever($keyBy);

    $results = [];

    foreach ($this->items as $key => $item) {
        $resolvedKey = $keyBy($item, $key);

        if (is_object($resolvedKey)) {
            $resolvedKey = (string)$resolvedKey;
        }

        $results[$resolvedKey] = $item;
    }

    return new static($results);
});