<?php

$first = [
   "first_name" => "Ridwan"
];

$last = [
   "last_name" => "Yusuf"
];

$full = $first + $last;
var_dump($full);

$a = [
   "first_name" => "Ridwan",
   "last_name" => "Yusuf"
];

$b = [
   "first_name" => "Diana",
   "last_name" => "Lutfi"
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
