<?php

use Illuminate\Support\Collection;

Collection::macro('toBase', function () {
    return new self($this);
});