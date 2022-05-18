<?php
echo "-----------ARRAY FUNCTION----------";

$fruits = ['apple', 'orange', 'pear'];

// Get length;
echo count($fruits); // 3

// Search Array
var_dump(in_array('apple', $fruits)); // return a boolean value

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
// add to the beginning
array_unshift($fruits, 'mango');

// remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);
// print_r($fruits);

////////////////////////////////////
// Merging array
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
// Spread operator
$arr4 = [...$arr1, ...$arr2];

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

print_r($c);

// Keys
$keys = array_keys($c);

print_r($keys);

$flipped = array_flip($c);

$numbers = range(1, 20);

$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);

// print_r($newNumbers);


$lessThanTen = array_filter($numbers, fn ($number) => $number <= 10);

// print_r($lessThanTen);

$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);

var_dump($sum);
