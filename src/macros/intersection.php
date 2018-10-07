<?php

use Illuminate\Support\Collection;

/**
 * Obtain the true intersection of two arrays.
 *
 * In a venn diagram between A and B, this function
 * returns all values shared between A and B.
 * (Center Venn Diagram)
 *
 * @param  array  $a
 * @param  array  $b
 * @return array
 */
Collection::macro('intersection', function (array $a, array $b) {
    return array_merge(
        array_intersect($a, $b), // B that also belong to A
        array_diff($a, $b), // A without B
        array_diff($b, $a) // B without A
    );
});