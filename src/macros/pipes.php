<?php

use Illuminate\Support\Collection;
use Illuminate\Pipeline\Pipeline;

/**
 * Pass the collection to the given callback and return the result.
 *
 * @param  callable $callback
 * @return mixed
 */
Collection::macro('pipes', function (array $pipes, string $method = 'handle') {
    return app(Pipeline::class)
        ->send($this->items)
        ->through($pipes)
        ->via($method)
        ->then(function ($content) {
            return $content;
        });
});