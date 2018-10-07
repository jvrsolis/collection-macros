<?php

use Illuminate\Support\Collection;

/**
 * Filter the items, removing any items that don't match the given type.
 *
 * @param  string  $type
 * @return static
 */
Collection::macro('havingInstanceOf', function ($type) {
    return $this->filter(function ($value) use ($type) {
        return $value instanceof $type;
    });
});