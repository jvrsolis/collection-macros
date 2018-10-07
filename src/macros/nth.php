<?php

use Illuminate\Support\Collection;

/**
 * Create a new array consisting of every n-th element.
 *
 * @param  int  $step
 * @param  int  $offset
 * @return static
 */
Collection::macro('nth', function ($step, $offset = 0) {
    $new = [];

    $position = 0;

    foreach ($this->items as $item) {
        if ($position % $step === $offset) {
            $new[] = $item;
        }

        $position++;
    }

    return new static($new);
});