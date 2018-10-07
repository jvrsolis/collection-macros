<?php

use Illuminate\Support\Collection;

/**
 * Execute a callback over each nested chunk of items.
 *
 * @param  callable  $callback
 * @return static
 */
Collection::macro('eachSpread', function (callable $callback) {
    return $this->each(function ($chunk, $key) use ($callback) {
        $chunk[] = $key;

        return $callback(...$chunk);
    });
});