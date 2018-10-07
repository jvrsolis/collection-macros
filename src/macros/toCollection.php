<?php

use Illuminate\Support\Collection;

if (!$this->hasMacro('toCollection')) {
    /*
     * Dump the contents of the array and terminate the script.
     */
    Collection::macro('toCollection', function () {
        return collect($array);
    });
}