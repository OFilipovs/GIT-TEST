<?php

$userInput = readline("Enter the number of the day: ");

while (!in_array($userInput, range(1,7))){
    echo "Not a valid day".PHP_EOL;
    $userInput = readline("Enter the number of the day: ");
}

switch ($userInput) {
    case 1:
        echo "This is Monday.";
        break;
    case 2:
        echo "This is Tuesday.";
        break;
    case 3:
        echo "This is Wednesday.";
        break;
    case 4:
        echo "This is Thursday.";
        break;
    case 5:
        echo "This is Friday.";
        break;
    case 6:
        echo "This is Saturday.";
        break;
    case 7:
        echo "This is Sunday.";
        break;
}