<?php

use Illuminate\Support\Collection;

Collection::macro('mapToAssoc', function ($callback) {
    return $this->map($callback)->toAssoc();
});