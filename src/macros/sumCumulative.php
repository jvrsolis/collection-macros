<?php

use Illuminate\Support\Collection;

Collection::macro('sumCumulative', function ($callback = null) {
    if (is_null($callback)) {
        return $this->sumTotal($this->items);
    }

    $callback = $this->valueRetriever($callback);

    return $this->reduce(function ($result, $item) use ($callback) {
        return $result + $callback($item);
    }, 0);
});