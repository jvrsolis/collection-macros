<?php

use Illuminate\Support\Collection;

/**
 * Take the first or last {$limit} items.
 *
 * @param  int  $limit
 * @return static
 */
Collection::macro('limit', function ($limit) {
    if ($limit < 0) {
        return $this->slice($limit, abs($limit));
    }

    return $this->slice(0, $limit);
});