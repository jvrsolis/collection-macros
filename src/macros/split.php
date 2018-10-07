<?php

use Illuminate\Support\Collection;

/**
 * Split a array into a certain number of groups.
 *
 * @param  int  $numberOfGroups
 * @return static
 */
Collection::macro('split', function (int $numberOfGroups) {
    if ($this->isEmpty()) {
        return new static;
    }

    $groups = new static;

    $groupSize = floor($this->count() / $numberOfGroups);

    $remain = $this->count() % $numberOfGroups;

    $start = 0;

    for ($i = 0; $i < $numberOfGroups; $i++) {
        $size = $groupSize;

        if ($i < $remain) {
            $size++;
        }

        if ($size) {
            $groups->push(new static(array_slice($this->items, $start, $size)));

            $start += $size;
        }
    }

    return $groups;
});