<?php

use Illuminate\Support\Collection;

Collection::macro('toObject', function () {
    $json = $this->toJson();
    return json_decode($json, false);
});