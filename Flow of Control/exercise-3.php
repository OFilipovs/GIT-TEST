<?php

$inputNumber = readline("Enter positive number: ");

$filterOptions = ["min_range"=> 0];
while ($inputNumber < 0){
    if(intval($inputNumber) < 0){
        echo "You can only enter positive numbers".PHP_EOL;
        $inputNumber = readline("Enter positive number: ");

    }
}


echo count(str_split($inputNumber));
