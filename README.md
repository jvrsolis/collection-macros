# [WORK IN PROGRESS]

# Collection Macros
A list of collection macros for laravel with functions found across the web and some I created. 
These macros also contain laravel's collection functions converted into macros.
The purpose of making this package is to remove the preserve functionality and add any additional functions for optional use.


<b>PLEASE LET ME KNOW OF ANY ERRORS IN FUNCTIONALITY SO THAT I MAY UPDATE THIS FILE AND OTHERS CAN BENEFIT FROM THIS.</b>

# Functions

	$this->search : Search the array for a given value and return the corresponding key if successful.
	$this->searchRobust : Get all keys from a variable dimensional array for a given value at any depth at any occurance and however many you choose.
	$this->whereOperation : Filter items by the given key value pair.
	$this->whereStrict : Filter items by the given key value pair using strict comparison.
	$this->whereIn : Filter items by the given key value pair.
	$this->whereInStrict : Filter items by the given key value pair using strict comparison.
	$this->whereNotIn : Filter items by the given key value pair.
	$this->whereNotInStrict : Filter items by the given key value pair using strict comparison.
	$this->filter : Run a filter over each of the items.
	$this->unique : Return only unique items from the array.
	$this->uniqueStrict : Return only unique items from the array array using strict comparison.
	$this->reject : Create a array of all elements that do not pass a given truth test.
	$this->except :  Get all items except for those with the specified keys.
	$this->exceptNull : Get all items except for those containing null values.
	$this->exceptEmpty : Get all items except for those containing empty values.
	$this->only : Get a subset of the items from the given array.
	$this->sort : Sort through each item with a callback.
	$this->sortBy : Sort the array using the given callback.
	$this->sortByDesc : Sort the array in descending order using the given callback.
	$this->sortMulti : Sort through a multidimensional array by keys and values.
	$this->sortByMany : Sort using many different keys.
	$this->mergeSort : Sort using the merge sort algorithm.
	$this->quickSort : Sort using the quick sort algorithm.
	$this->bubbleSort : Sort using the bubble sort algorithm.
	$this->bidirectionalBubbleSort : Sort using the bidirectional sort algorithm.
	$this->insertionSort : Sort using the insertion sort algorithm.
	$this->selectionSort : Sort using the selection sort algorithm.
	$this->shellSort : Sort using the shell sort algorithm.
	$this->cocktailSort : Sort using the cocktail sort algorithm.
	$this->combSort : Sort using the comb sort algorithm.
	$this->gnomeSort : Sort using the gnome sort algorithm.
	$this->countingSort : Sort using the counting sort algorithm.
	$this->radixSort : Sort using the radix sort algorithm.
	$this->beadSort : Sort using the bead sort algorithm.
	$this->bogoSort : Sort using the bogo sort algorithm.
	$this->checkSort : Sort using the check sort algorithm.
	$this->groupBy : Group an associative array by a field or using a callback.
	$this->groupMany : Group an associative array by many fields or callbacks.
	$this->ungroup : Ungroup a previously grouped array (grouped by {@see $this->groupBy()})
	$this->avg : Get the average value of a given key.
	$this->average : Alias for the "avg" method.
	$this->count : Count the number of items in the collection.
	$this->sum : Get the sum of the given values.
	$this->max : Get the max value of a given array.
	$this->min : Get the min value of a given array.
	$this->mode : Get the mode of a given array.
	$this->median : Get the median of a given array.
	$this->range : Create a new array instance with a range of numbers.
	$this->aggregate : Call an aggregate function on an array. (Sum, max, min, etc)
	$this->tap : Pass the array to the given callback and then return it.
	$this->when : Apply the callback if the value is truthy.
	$this->unless : Apply the callback if the value is falsy.
	$this->ifEmpty : Execute a callable if the array is empty, then return the collection.
	$this->ifAny : Execute a callable if the array isn't empty, then return the collection.
	$this->map : Run a map over each of the items.
	$this->mapWithKeys : Run an associative map over each of the items.
	$this->mapSpread : Run a map over each nested chunk of items.
	$this->mapToGroups : Run a grouping map over the items.
	$this->mapToAssoc : Map an array to associative key value pairings.
	$this->flatMap : Map an array and flatten the result by a single level.
	$this->filterMap : Map an array and filter the results.
	$this->pluck : Pluck an array of values from an array.
	$this->values : Reset the keys on the underlying array.
	$this->keys : Get the keys of the array items.
	$this->keyBy : Key an associative array by a field or using a callback.
	$this->times : Create a new array by invoking the callback a given number of times.
	$this->each : Execute a callback over each item.
	$this->eachSpread : Execute a callback over each nested chunk of items.
	$this->first : Get the first item from the array or the first value after a callback is executed on the array.
	$this->last : Get the last item from the array or the lsat value after a callback is executed on the array.
	$this->after : Get the next item from the array.
	$this->before : Get the previous item from the array.
	$this->take : Take the first or last {$limit} items.
	$this->reduce : Reduce the array to a single value.
	$this->slice : Slice the underlying array.
	$this->sliceAssoc : Slice the underlying array using associative keys.
	$this->splice : Splice a portion of the underlying array.
	$this->split : Split a array into a certain number of groups.
	$this->partition : Partition the array into two arrays using the given callback or key.
	$this->nth : Create a new array consisting of every n-th element.
	$this->chunk : Chunk the underlying array.
	$this->transform : Determine if the given value is callable, but not a string.
	$this->permutations : Returns all possible permutations. The resulting array will always have pow(count($values), $n) values
	$this->combinations : Returns all possible combinations.
	$this->balance : Equalize the size of two arrays.
	$this->rotate : Rotate the items of the array, return the last item.
	$this->shuffle : Shuffle the items in the collection.
	$this->random : Get one or a specified number of random values from an array.
	$this->occurances : Returns an associative array of values from array as keys and their count as value.
	$this->depth : Return the depth of the array.
	$this->swapPositions : Swap the position of two elements in the array (used in sorting algorithm)
	$this->reverse : Reverse items order.
	$this->reverseKeys : Reverse keys of an array.
	$this->flip : Flip the items in the array.
	$this->transpose : Transpose a array. Rows become columns, columns become rows.
	$this->transposeWithKeys : Transpose an array while keeping its columns and row headers intact.
	$this->transposeStrict : Transpose an array strictly. (Length errors are thrown)
	$this->crossJoin : Cross join the given arrays.
	$this->innerJoin : Inner join the given arrays.
	$this->outerJoin : Outer join the given arrays.
	$this->union : Obtain the true union two arrays.
		EXP:: In a venn diagram between A and B, this function returns all values found exclusively in A and exclusively in B 
		and values shared between A and B. 
		(All Venn Diagram)
	$this->intersection : Obtain the true intersection of two arrays.
		EXP:: In a venn diagram between A and B, this function returns all values shared between A and B. 
		(Center Venn Diagram)
	$this->difference : Obtain the true difference of two arrays.
		EXP:: In a venn diagram between A and B, this function returns exclusive values of both A and B, but 
		not values shared between A and B. 
		(Left and Right Only Venn Diagram)
	$this->rightDifference : Obtain the true right difference of two arrays.
		EXP:: In a venn diagram between A and B, this function returns values found exclusively in B, 
		but not values shared between A and B. 
		(Right Only Venn Diagram)
	$this->rightUnion : Obtain the true right union of two arrays.
		EXP:: In a venn diagram between A and B, this function returns all values found exclusively in A and
     	values shared between A and B. 
		(Right and Center of Venn Diagram)
	$this->leftDifference : Obtain the true left difference.
		In a venn diagram between A and B, this function returns values found exclusively in A, but not
     	values shared between A and B.
		(Left Only Venn Diagram)
	$this->leftUnion : Obtain the true left union.
		In a venn diagram between A and B, this function returns all values found exclusively in A and and
    	commonly shared values.
     	(Left and Center of Venn Diagram)
	$this->intesect : Intersect the array with the given items.
	$this->intersectKeys : Intersect the array with the given items by key.
	$this->intersectRecursive : Intersect the array recursively.
	$this->intersectKeysRecursive : Intersect key the array recursively.
	$this->diff : Get the items in the array that are not present in the given items.
	$this->diffAssoc : Get the items in the array whose keys and values are not present in the given items.
	$this->diffKeys : Get the items in the array whose keys are not present in the given items.
	$this->diffRecursive : Get the items in the arrays whos keys are not in the given items.
	$this->mergeRecursive : Merge the arrays recursively with the given items.
	$this->merge :  Merge the array with the given items.
	$this->mergeFlatMap : Merge the array after a flat map, preserving the keys.
	$this->concat : Push all of the given items onto the array.
	$this->combine : Create a array by using this array for keys and another for its values.
	$this->divide : Divide an array into two arrays. One with keys and the other with values.
	$this->zip : Zip the array together with one or more arrays.
	$this->flatten : Flatten a multi-dimensional array into a single level.
	$this->collapse : Collapse an array of arrays into a single array.
	$this->collapseWitKeys : Collapse an array of arrays into a single array, avoids using array_merge to preserve the keys.
	$this->implode : Concatenate values of an array.
	$this->implodeWithKeys : Concatenate values of a given key as a string.
	$this->implodeMulti : Concatenate values of a given key as a string in a multidimensional array.
	$this->uppercase : Map all items to uppercase.
	$this->isAccessible : Determine whether the given value is array accessible.
	$this->isAssoc : Determines if an array is associative.
	$this->isIndexed : Returns a value indicating whether the given array is an indexed array.
	$this->isMulti : Determines if an array is multidimensional.
	$this->isEmpty : Determines if the array is empty or not.
	$this->isNotEmpty : Determine if the array is not empty.
	$this->has : Check if an item or items exist in an array using "dot" notation.
	$this->contains : Determine if an item exists in the array.
	$this->containsStrict : Determine if an item exists in the array using strict comparison.
	$this->every : Determine if all items in the array pass the given test.
	$this->paginate : Paginate the given array.
	$this->simplePaginate : Paginate the array into a simple paginator
	$this->forPage : "Paginate" the array by slicing it into a smaller array.
	$this->toSet : Converts a model array into a dataset.
	$this->toSeries : Converts a model array into a multi-dataset series. 
	$this->toCollection : Get the array of items as a plain array.
	$this->toJson : Get the array of items as JSON.
	$this->toString : Convert the array to its string representation.
	$this->toGeneric : Convert the array to an object.
	$this->toGenericStrict : Convert the array and all nested arrays into objects.
	$this->toCollection : Convert the array to a collection.
	$this->toCollectionStrict : Convert the array and all nested arrays into collections.
	$this->make : Create an empty array.
	$this->all : Return all values of the array.
	$this->add : Add an element to an array using "dot" notation if it doesn't exist.
	$this->forget : Remove one or many array items from a given array using "dot" notation.
	$this->put : Put an item in the array by key.
	$this->push : Push an item onto the end of the array.
	$this->pull : Get a value from the array, and remove it.
	$this->pop : Get and remove the last item from the array.
	$this->shift : Get and remove the first item from the array.
	$this->prepend : Push an item onto the beginning of an array.
	$this->get : Get an item from an array using "dot" notation.
	$this->offsetGet : Get an item at a given offset.
	$this->set : Set an array item to a given value using "dot" notation.
	$this->offsetSet : Set the item at a given offset.
	$this->offsetUnset : Unset the item at a given offset.
	$this->exists : Determine if the given key exists in the provided array.
	$this->offsetExists : Determine if an item exists at an offset.
	$this->dot : Flatten a multi-dimensional associative array with dots.
	$this->undot : Expands a dotted associative array. The inverse of $this->dot().
	$this->wrap : If the given value is not an array, wrap it in one.
	$this->explodePluckParameters : Explode the "value" and "key" arguments passed to "pluck".
	$this->jsonSerialize : Convert the object into something JSON serializable.
	$this->valueRetriever :  Get a value retrieving callback.
	$this->useAsCallable : Determine if the given value is callable, but not a string.
	$this->getArrayableItems : Results array of items from array or Collectionable.
	$this->getCachingIterator : Get a CachingIterator instance.
	$this->operatorForWhere : Get an operator checker callback.
	$this->toAssoc : Create an associative keyed array the specified column values of the array.
	$this->dump : Dump the arguments given followed by the collection.



....
