<?php

use Illuminate\Support\Collection;

/**
 * Group an associative array by a field or using a callback.
 *
 * @param  callable|string  $groupBy
 * @param  bool  $preserveKeys
 * @return static
 */
Collection::macro('groupBy', function ($groupBy, $preserveKeys = false) {
    if (is_array($groupBy)) {
        $nextGroups = $groupBy;

        $groupBy = array_shift($nextGroups);
    }

    $groupBy = $this->valueRetriever($groupBy);

    $results = [];

    foreach ($this->items as $key => $value) {
        $groupKeys = $groupBy($value, $key);

        if (!is_array($groupKeys)) {
            $groupKeys = [$groupKeys];
        }

        foreach ($groupKeys as $groupKey) {
            $groupKey = is_bool($groupKey) ? (int)$groupKey : $groupKey;

            if (!array_key_exists($groupKey, $results)) {
                $results[$groupKey] = new static;
            }

            $results[$groupKey]->offsetSet($preserveKeys ? $key : null, $value);
        }
    }

    $result = new static($results);

    if (!empty($nextGroups)) {
        return $result->map->groupBy($nextGroups, $preserveKeys);
    }

    return $result;
});