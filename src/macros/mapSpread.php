<?php

use Illuminate\Support\Collection;

/**
 * Run a map over each nested chunk of items.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('mapSpread', function (callable $callback) {
    return $this->map(function ($chunk, $key) use ($callback) {
        $chunk[] = $key;

        return $callback(...$chunk);
    });
});