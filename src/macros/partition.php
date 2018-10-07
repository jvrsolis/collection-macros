<?php

use Illuminate\Support\Collection;

/**
 * Partition the collection into two arrays using the given callback or key.
 *
 * @param  callable|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */
Collection::macro('partitions', function ($key, $operator = null, $value = null) {
    $partitions = [new static, new static];

    $callback = func_num_args() === 1
        ? $this->valueRetriever($key)
        : $this->operatorForWhere(...func_get_args());

    foreach ($this->items as $key => $item) {
        $partitions[(int)!$callback($item, $key)][$key] = $item;
    }

    return new static($partitions);
});