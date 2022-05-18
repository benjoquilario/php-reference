<?php

/*---------- FUNCTION ---------- */

function registerUser($email)
{
  echo $email . "Registered";
}

registerUser("brad@gmail.com");


function sum($n1 = 4, $n2 = 5)
{
  return $n1 + $n2;
}

$sumResults = sum();

echo $sumResults;


$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(10, 5);
