<?php

use Illuminate\Support\Collection;

/**
 * An extension of the {@see $this->sortBy()} method that allows for sorting against as many different
 * keys. Uses a combination of {@see $this->sortBy()} and {@see $this->groupBy()} to achieve this.
 *
 * @param array $keys An associative array that uses the key to sort by (which accepts dot separated values,
 *                    as {@see $this->sortBy()} would) and the value is the order (either ASC or DESC)
 */
Collection::macro('sortByMany', function (array $keys) {
    $currentIndex = 0;
    $keys = array_map(function ($key, $sort) {
        return ['key' => $key, 'sort' => $sort];
    }, array_keys($keys), $keys);

    $sortBy = function (array $collection) use (&$currentIndex, $keys, &$sortBy) {
        if ($currentIndex >= count($keys)) {
            return $collection;
        }

        $key = $keys[$currentIndex]['key'];
        $sort = $keys[$currentIndex]['sort'];
        $sortFunc = $sort === 'DESC' ? 'sortByDesc' : 'sortBy';
        $currentIndex++;
        $sorted = static::$sortFunc($collection, $key);
        $grouped = static::groupBy($sorted, $key);

        $mapped = static::map($grouped, $sortBy);

        $ungrouped = static::ungroup($mapped);

        return $ungrouped;
    };

    return $sortBy($array);
});