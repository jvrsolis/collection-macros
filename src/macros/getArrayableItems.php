<?php

use Illuminate\Support\Collection;

/**
 * Results array of items from array or Collectionable.
 *
 * @param  mixed  $items
 * @return array
 */
Collection::macro('getArrayableItems', function ($items) {
    if (is_array($items)) {
        return $items;
    } elseif ($items instanceof self) {
        return $items->all();
    } elseif ($items instanceof Arrayable) {
        return $items->toArray();
    } elseif ($items instanceof Jsonable) {
        return json_decode($items->toJson(), true);
    } elseif ($items instanceof JsonSerializable) {
        return $items->jsonSerialize();
    } elseif ($items instanceof Traversable) {
        return iterator_to_array($items);
    }

    return (array)$items;
});