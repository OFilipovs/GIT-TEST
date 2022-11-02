<?php
function payCalc($hours, $basePay){
    if ($hours > 60){
        return "Error";
    } else if ($basePay < 8){
        return "Error";
    } else{
        if ($hours > 40){
           return (($basePay * 1.5) * ($hours - 40)) + ($basePay * 40);
        } else {
            return $basePay * 40;
        }
    }
}

function printPay(){
    return "Your salary is ".payCalc(readline("Enter your hours: "), readline("Enter your hourly wage: "));
}

echo printPay();
