<?php

use Illuminate\Support\Collection;

/**
 * Convert the object into something JSON serializable.
 *
 * @return array
 */
Collection::macro('jsonSerialize', function () {
    return array_map(function ($value) {
        if ($value instanceof JsonSerializable) {
            return $value->jsonSerialize();
        } elseif ($value instanceof Jsonable) {
            return json_decode($value->toJson(), true);
        } elseif ($value instanceof Arrayable) {
            return $value->toArray();
        }

        return $value;
    }, $this->items);
});