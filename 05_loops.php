<?php
/* -------- FOR LOOP --------*/

//////////////////////////////
// For Loop Syntax

for ($x = 0; $x <= 10; $x++) {
  echo $x;
}

//////////////////////////////
// While Loop
/*
** while(condition) {
    // code to executed
  }
*/

/*
$x = 1;

while ($x <= 15) {
  echo 'Number ' . $x . '<br>';
  $x++;
}
*/

//////////////////////////////
// Do ..while loop

/*
$z = 1;

do {
  echo 'Number ' . $z . '<br>';
  $z++;
} while ($z <= 5);
*/

/////////////////////////////////
// Foreach Loop

/*
** foreach($array as $value) {
    // code to be executed;
  }
*/

// looping through arrays
$posts = ['First Post', 'Second Post', 'Third Post'];

// for loop
for ($x = 0; $x < count($posts); $x++) {
  echo $posts[$x];
}

// foreach loop
foreach ($posts as $index => $post) {
  echo $index + 1 . ' - ' . $post . '<br>';
}


$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

foreach ($person as $key => $value) {
  echo "${key} - ${value} <br>";
}
