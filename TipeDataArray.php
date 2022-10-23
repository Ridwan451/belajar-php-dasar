<?php

$values = array(1, 2, 3, 4.5);
var_dump($values);

$names = ["Ridwan", "Yusuf", "Rifaldi"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Dianna";
var_dump($names);

unset($names[1]);
var_dump($names);


$names[] = "Lutfi";
var_dump($names);

var_dump(count($names));


$ridwan = array(
   "id" => "ridwan",
   "name" => "Ridwan Yusuf",
   "age" => 21,
   "address" => [
      "city" => "Cimahi",
      "country" => "Indonesia"
   ]
);
var_dump($ridwan);

var_dump($ridwan["name"]);

$dianna = [
   "id" => "dianna",
   "name" => "Dianna Lutfi",
   "age" => 21,
   "address" => [
      "city" => "Bandung",
      "country" => "Indonesia"
   ]
];
var_dump($dianna);
var_dump($dianna["address"]["country"]);
