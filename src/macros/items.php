<?php

use Illuminate\Support\Collection;

Collection::macro('items', function () {
    return $this->items;
});