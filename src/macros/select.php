<?php

use Illuminate\Support\Collection;

Collection::macro('select', function ($keys) {
    if (!is_array($keys)) {
        $keys = func_get_args();
    }
    return $this->map(function ($item) use ($keys) {
        $list = [];
        foreach ($keys as $key) {
            $arr = explode(".", $key);
            $last = end($arr);
            $list[$last] = data_get($item, $key);
        }
        return $list;
    }, new static);
});