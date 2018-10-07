<?php

use Illuminate\Support\Collection;

/**
 * Dump the collection and end the script.
 *
 * @return void
 */
Collection::macro('dd', function (...$args) {
    call_user_func_array([$this, 'dump'], $args);
    die(1);
});