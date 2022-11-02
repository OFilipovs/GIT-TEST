<?php

$gameState = "again";

function gameEngine(){
    $beautify = "-=-=-=-=-=-=-=-=-=-=-=-=-=-";
    $words = ["human", "computer", "destiny", "legends"];
    $wordToGuess = str_split($words[array_rand($words,1)]);
    $guessingDisplay = [];
    $misses = "";
    $guess = "";

    foreach ($wordToGuess as $letter){
        $guessingDisplay[] = "_";
    }


    $guessCount = 1;
    $extraTries = 3;
    while ($guessCount <= count($wordToGuess)+$extraTries){

        echo $beautify.PHP_EOL;
        echo PHP_EOL;
        echo "Word: ".implode(" ",$guessingDisplay).PHP_EOL;
        echo PHP_EOL;
        echo "Misses: ".$misses.PHP_EOL;
        echo PHP_EOL;
        echo "Guess: ";
        $userInput = readline();
        echo PHP_EOL;


        if(in_array($userInput, $wordToGuess)){
            $keys = array_keys($wordToGuess, $userInput);
            foreach ($keys as $key){
                $guessingDisplay[$key] = $wordToGuess[$key];
            }
        } else {
            $misses .= $userInput;
        }

        if (implode("",$wordToGuess) === implode("",$guessingDisplay)){
            echo "YOU GOT IT".PHP_EOL;
            echo "Play 'again' or 'quit'? ";

            return readline();

        } else if ($guessCount === count($wordToGuess)+$extraTries){
            echo "YOU LOST".PHP_EOL;
            echo "Play 'again' or 'quit'? ";

            return readline();
        }
        $guessCount++;

    }
}

while ($gameState === "again") $gameState = gameEngine();

echo "Bye".PHP_EOL;

