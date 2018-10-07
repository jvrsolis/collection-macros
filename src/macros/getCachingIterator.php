<?php

use Illuminate\Support\Collection;

/**
 * Get a CachingIterator instance.
 *
 * @param  int  $flags
 * @return \CachingIterator
 */
Collection::macro('getIterator', function ($flags = CachingIterator::CALL_TOSTRING) {
    return new CachingIterator($this->getIterator(), $flags);
});