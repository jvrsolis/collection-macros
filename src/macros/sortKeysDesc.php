<?php

use Illuminate\Support\Collection;

/**
 * Sort the collection keys.
 *
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */
Collection::macro('sortKeysDesc', function ($items, $options = SORT_REGULAR) {
    return $this->sortKeys($options, true);
});