<?php


function CheckOddEven($numberToCheck){
    if($numberToCheck % 2 === 0){
        return "Even number";
    } else {
        return "Odd number";
    }
}

$userSelection = 0;

while ($userSelection != 2){
    $userNumber = intval(readline("Enter the number to check:".PHP_EOL));
    echo CheckOddEven($userNumber).PHP_EOL;
    echo "1. Would you like to check a new number?".PHP_EOL;
    echo "2. EXIT".PHP_EOL;
    $userSelection = intval(readline("Your selection: "));
    if ($userSelection === 2){
        echo "Bye!";
    }
}