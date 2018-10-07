<?php

use Illuminate\Support\Collection;

/**
 * Sort the array using the given callback.
 *
 * @param  callable|string  $callback
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */
Collection::macro('sortBy', function ($callback, $options = SORT_REGULAR, $descending = false) {

    $results = [];

    $callback = $this->valueRetriever($callback);

        // First we will loop through the items and get the comparator from a callback
        // function which we were given. Then, we will sort the returned values and
        // and grab the corresponding values for the sorted keys from this array.
    foreach ($this->items as $key => $value) {
        $results[$key] = $callback($value, $key);
    }

    $descending ? arsort($results, $options)
        : asort($results, $options);

        // Once we have sorted all of the keys in the array, we will loop through them
        // and grab the corresponding model so we can set the underlying items list
        // to the sorted version. Then we'll just return the collection instance.
    foreach (array_keys($results) as $key) {
        $results[$key] = $this->items[$key];
    }

    return new static($results);
});