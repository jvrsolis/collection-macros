<?php

use Illuminate\Support\Collection;

Collection::macro('selectionSort', function ($data) {
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        $data = $this->swapPositions($data, $i, $min);
    }
    return $data;
});