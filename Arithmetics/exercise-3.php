<?php
$lowerBound = 1;
$upperBound = 5;

function sumOfRange($start, $end){
    return array_sum(range($start,$end));
}



echo "The sum of $lowerBound to $upperBound is ".sumOfRange($lowerBound, $upperBound).PHP_EOL;
echo "The average is ".sumOfRange($lowerBound,$upperBound) / $upperBound;