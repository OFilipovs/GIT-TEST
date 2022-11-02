<?php

$numberOne = intval(readline("provide first number: "));
$numberTwo = intval(readline("provide second number: "));

function determinator($first, $second){
    if ($first - $second === 15 || $second - $first === 15){
        return "true";
    } elseif ($first + $second === 15){
        return "true";
    } elseif ($first === 15 || $second === 15){
        return "true";
    } else{
        return "false";
    }
}

echo determinator($numberOne,$numberTwo);