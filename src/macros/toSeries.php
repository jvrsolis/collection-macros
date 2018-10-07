<?php

use Illuminate\Support\Collection;

/**
 * Converts a model array into a multi-dataset series.
 * @param string $series The column containg the series labels.
 * @param string $label  The column containing the labels for each set.
 * @param string $data   The column containing the values for each set.
 * @param string $data   The aggregate function to run on the data column.
 */
Collection::macro('series', function ($series, $label, $value, $aggregate = null) {
    $grouped = $this->groupBy($series);

    return $this->transform($grouped, function ($seriesData, $seriesLabel) use ($label, $value, $aggregate) {
        return $this->dataset($seriesData, $label, $value, $aggregate);
    });
});