<?php

use Illuminate\Support\Collection;

/**
 * Ungroup a previously grouped array (grouped by {@see $this->groupBy()})
 */
Collection::macro('ungroup', function () {
        // create a new array to use as the array where the other arrays are merged into
    $newCollection = $this->make([]);

    $this->each(function ($item) use (&$newCollection) {
            // use merge to combine the arrays
        $newCollection = $this->merge($newCollection, $item);
    });

    return $newCollection;
});