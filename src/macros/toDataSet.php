<?php

use Illuminate\Support\Collection;

/**
 * Converts a model array into a dataset.
 * @param string $label  The column containing the labels for each set.
 * @param string $data   The column containing the values for each set.
 */
Collection::macro('toDataSet', function ($label, $value, $aggregate = null) {
    $groups = $this->mapToGroups(function ($dataset) use ($label, $value) {
        return [$dataset[$label] => $dataset[$value]];
    });
    return $this->map($groups, function ($group) use ($aggregate) {
        return $this->aggregate($group, $aggregate);
    });
});