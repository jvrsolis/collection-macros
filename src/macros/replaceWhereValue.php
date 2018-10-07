<?php

use Illuminate\Support\Collection;

Collection::macro('replaceWhereValue', function (array $items, $operator, $value, $replacement = null) {
    if (func_num_args() === 3) {
        $replacement = $value;
        $value = $operator;
        $operator = '=';
    }

    return $this->actWhereValue($items, $operator, $value, function ($item, $key) use ($replacement) {
        return $replacement;
    });
});