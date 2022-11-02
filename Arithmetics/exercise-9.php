<?php

function bodyMassIndex($weight, $height): string
{
    $freedomWeight = $weight * 2.20462;
    $freedomHeight = $height * 0.393701;

    $bodyIndex = round((($freedomWeight * 703) / ($freedomHeight ** 2)),1);

    if($bodyIndex < 18.5){
        echo "Your BMI is $bodyIndex. You are underweight!";
    } else if ($bodyIndex > 25){
        echo "Your BMI is $bodyIndex. You are overweight!";
    } else {
        echo "Your BMI is $bodyIndex. You have optimal weight!";
    }
}

bodyMassIndex(readline("Enter your weight in kg: "), readline("Enter your height in cm: "));