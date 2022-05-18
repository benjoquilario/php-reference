<?php

// echo - Output string, numbers, html, etc
// echo 'Hello World!!!12345';

// print - Works like echo, but can only tae in a single argument
print 123;

// print_r() - print single values and arrays;
print_r([1, 2, 3]);

// var_dump() - Returns more info like data type and length
var_dump(true);

// var_export() - similar to var dump(). Outputs a string representation of a variable
var_export(false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?= 'Post One' ?></h1>
</body>

</html>