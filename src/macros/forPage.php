<?php

use Illuminate\Support\Collection;

/**
 * "Paginate" the array by slicing it into a smaller array.
 *
 * @param  int  $page
 * @param  int  $perPage
 * @return static
 */
Collection::macro('forPage', function ($page, $perPage) {
    $offset = max(0, ($page - 1) * $perPage);

    return $this->slice($offset, $perPage);
});