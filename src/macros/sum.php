<?php

use Illuminate\Support\Collection;

Collection::macro('sum', function ($value = null, $type = null) {
    if (is_numeric($value) || $type === 'value') {
        return $this->sumValue($value);
    }

    if (is_iterable($value) || $type === 'set') {
        return $this->sumSets($value);
    }

    if (is_callable($value) || $type === 'callable') {
        return $this->sumCallback($value);
    }

    if (is_null($value) && $type === 'cumulative') {
        return $this->sumCumulative();
    }

    return $this->sumTotal();
});