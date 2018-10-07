<?php

use Illuminate\Support\Collection;

Collection::macro('sumCallback', function ($callback = null) {
    $callback = $this->valueRetriever($callback);

    return $this->reduce(function ($result, $item) use ($callback) {
        return $result + $callback($item);
    }, 0);
});