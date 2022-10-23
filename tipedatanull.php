<?php

$name = "Wan";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Wan";
unset($contoh);

$contoh = "Yusuf";
$contoh = null;

var_dump(isset($contoh));
