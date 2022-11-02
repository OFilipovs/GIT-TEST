<?php

$wordsToGuess = ["human", "cat", "victory"];

$randomNumber = rand(0,count($wordsToGuess)-1);

$wordToDisplay = str_split($wordsToGuess[$randomNumber]);

$guessedLetters = [];

function displayWord($word){
    global $guessedLetters;
    for ($i = 0; $i < count($word); $i++){
        if ($i === 0){
            echo $word[$i];
            $guessedLetters[] = $i;
        } else if(in_array($i, $guessedLetters)){
            echo " $word[$i]";
        } else {
            echo " _";
        }
    }
    echo PHP_EOL;
}

displayWord($wordToDisplay);
print_r($guessedLetters);

while (count($guessedLetters)+1 <= count($wordToDisplay)-1){
    $userGuess = readline("Make your guess:");
    if (!(in_array(array_keys($wordToDisplay, $userGuess), $guessedLetters)) && in_array($userGuess, $wordToDisplay)){
        $guessedLetters []= array_search($userGuess, $wordToDisplay);
        displayWord($wordToDisplay);

    } else {
        $userGuess = readline("Make your guess:");
    }
}

echo "You won! The word is ".implode('',$wordToDisplay);
