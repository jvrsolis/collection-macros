<?php

use Illuminate\Support\Collection;

Collection::macro('float', function () {
    $function = function (&$array) use (&$function) {
        foreach ($array as $key => $value) {
            if (is_numeric($value)) {
                $value = floatval($value);
                $array[$key] = $value;
            } else {
                unset($value);
            }
        }
        return $array;
    };

    $function($this->items);

    return $this;
});