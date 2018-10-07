<?php

use Illuminate\Support\Collection;

Collection::macro('checkSort', function () {
    if (!$length = count($array)) {
        return true;
    }
    for ($i = 0; $i < $length; $i++) {
        if (isset($array[$i + 1])) {
            if ($array[$i] > $array[$i + 1]) {
                return false;
            }
        }
    }
    return true;
});