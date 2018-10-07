<?php

use Illuminate\Support\Collection;

Collection::macro('isMulti', function () {
    return count($array) != count(COUNT_RECURSIVE);
});