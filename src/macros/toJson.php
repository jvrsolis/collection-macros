<?php

use Illuminate\Support\Collection;

/**
 * Get the array of items as JSON.
 *
 * @param  int  $options
 * @return string
 */
Collection::macro('toJson', function ($options = 0) {
    return json_encode($this->jsonSerialize(), $options);
});