<?php

use Illuminate\Support\Collection;


/*
 * Dump the contents of the array and terminate the script.
 */
Collection::macro('toCollection', function () {
    return collect($array);
});