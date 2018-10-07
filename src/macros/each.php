<?php

use Illuminate\Support\Collection;

/**
 * Execute a callback over each item.
 *
 * @param  callable  $callback
 * @return $array
 */
Collection::macro('each', function (callable $callback) {
    foreach ($this->items as $key => $item) {
        if ($callback($item, $key) === false) {
            break;
        }
    }

    return $this;
});