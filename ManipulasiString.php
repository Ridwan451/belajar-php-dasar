<?php

$name = "Ridwan Yusuf Rifaldi";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . PHP_EOL;


$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$name = "Ridwan";
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

echo "Hello $name, selamat belajar PHP" . PHP_EOL;

$var = "Wan";
echo "This is {$var}s" . PHP_EOL;
