<?php

for ($counter = 1; $counter <= 10; $counter++) {
   echo "Ini dalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) :
   echo "Ini dalah for loop ke-$counter" . PHP_EOL;
endfor;
