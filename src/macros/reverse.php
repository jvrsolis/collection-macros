<?php

use Illuminate\Support\Collection;

/**
 * Reverse items order.
 *
 * @return array
 */
Collection::macro('reverse', function () {
    return new static(array_reverse($this->items, true));
});