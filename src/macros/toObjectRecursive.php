<?php

use Illuminate\Support\Collection;

if (!$this->hasMacro('toObjectRecursive')) {
    Collection::macro('toObjectRecursive', function () {
        return json_decode(json_encode($array), false);
    });
}