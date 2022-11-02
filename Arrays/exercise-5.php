<?php

function display_board()
{
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
}


display_board();

$board = [["","",""],["","",""],["","",""]];

function addToBoard($userInput){
    return explode(" ", $userInput);
}

$gameState = "ongoing";
$playerTurn = "X";
$turnCounter = 0;
while ($gameState != "winner"){
    if ($playerTurn === "X"){
        echo "'X', choose your location (row, column):".PHP_EOL;
        $coordinates = addToBoard(readline());
        if ($board[$coordinates[0]][$coordinates[1]] === ""){
            $board[$coordinates[0]][$coordinates[1]] = "X";
            $playerTurn = "0";

        } else {
            $playerTurn = "X";
        }

    } else {
        echo "'O', choose your location (row, column):".PHP_EOL;
        $coordinates = addToBoard(readline());
        if ($board[$coordinates[0]][$coordinates[1]] === ""){
            $board[$coordinates[0]][$coordinates[1]] = "O";
            $playerTurn = "X";
        } else {
            $playerTurn = "O";
        }
    }



    echo " {$board[0][0]}  | {$board[0][1]}  | {$board[0][2]}  \n";
    echo "---+---+---\n";
    echo " {$board[1][0]}  | {$board[1][1]}  | {$board[1][2]}  \n";
    echo "---+---+---\n";
    echo " {$board[2][0]}  | {$board[2][1]}  | {$board[2][2]}  \n";

    $turnCounter++; // used to determine tie

    // below are winning and tie conditions

    if ($board[0][0] === $board[0][1] && $board[0][1] === $board[0][2]){
        echo $board[0][0].", You won";
        $gameState = "winner";
    } else if ($board[0][0] === $board[1][0] && $board[1][0] === $board[2][0] && $board[0][0]  != ""){
        echo $board[0][0].", You won";
        $gameState = "winner";
    } else if ($board[0][1] === $board[1][1] && $board[1][1] === $board[2][1] && $board[2][1]  != ""){
        echo $board[0][1].", You won";
        $gameState = "winner";
    } else if ($board[0][2] === $board[1][2] && $board[1][2] === $board[2][2] && $board[2][2]  != ""){
        echo $board[0][2].", You won";
        $gameState = "winner";
    } else if ($board[1][0] === $board[1][1] && $board[1][1] === $board[1][2]  && $board[1][2]  != ""){
        echo $board[1][0].", You won";
        $gameState = "winner";
    } else if ($board[2][0] === $board[2][1] && $board[2][1] === $board[2][2] && $board[2][2]  != ""){
        echo $board[2][0].", You won";
        $gameState = "winner";
    } else if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2] && $board[2][2]  != ""){
        echo $board[0][0].", You won";
        $gameState = "winner";
    } else if ($board[0][2] === $board[1][1] && $board[1][1] === $board[2][0] && $board[2][0]  != ""){
        echo $board[0][2].", You won";
        $gameState = "winner";
    } else if ($turnCounter === 9){
        echo "The game is a tie";
        $gameState = "winner";
    }
}