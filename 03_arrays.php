<?php

// Simple Array

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);

// Associated Array

$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green',
];

echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => "#00f"
];

echo $hex['blue'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail'
];

echo $person['first_name'];

// multi dimensional array
$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail'
  ],
  [
    'first_name' => 'Benjo',
    'last_name' => 'Quilario',
    'email' => 'benjo@gmail'
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'brad@gmail'
  ]
];

echo $people[1]['email'];

var_dump(json_encode($people));
