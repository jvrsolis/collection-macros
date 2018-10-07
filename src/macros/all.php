<?php

use Illuminate\Support\Collection;

/**
 * Create a new array instance if the value isn't one already.
 *
 * @param  mixed  $items
 * @return static
 */
Collection::macro('all', function () {
    return $this->items;
});