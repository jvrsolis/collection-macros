<?php

use Illuminate\Support\Collection;


Collection::macro('toObjectRecursive', function () {
    return json_decode(json_encode($array), false);
});
