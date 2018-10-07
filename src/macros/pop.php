<?php

use Illuminate\Support\Collection;

/**
 * Get and remove the last item from the array.
 *
 * @return mixed
 */
Collection::macro('pop', function () {
    return array_pop($this->items);
});