<?php

use Illuminate\Support\Collection;

/**
 * Chunk the array.
 *
 * @param  int  $size
 * @return static
 */
Collection::macro('chunk', function ($size) {
    if ($size <= 0) {
        return new static;
    }

    $chunks = [];

    foreach (array_chunk($this->items, $size, true) as $chunk) {
        $chunks[] = new static($chunk);
    }

    return new static($chunks);
});