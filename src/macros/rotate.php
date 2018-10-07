<?php

use Illuminate\Support\Collection;

Collection::macro('rotate', function (array &$array) {
    $element = array_shift($array);
    array_push($element);
    return $element;
});