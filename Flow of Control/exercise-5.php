<?php

// ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).

$ladyGagaTelephone = ["two" => ["A", "B", "C"],
                    "three" => ["D","E","F"],
                    "four" => ["G","H","I"],
                    "five" => ["J","K","L"],
                    "six" => ["M","N","O"],
                    "seven" => ["P","Q","R","S"],
                    "eight" => ["T","U","V"],
                    "nine" => ["W","X","Y","Z"]];

$tes = readline(">");

$hereIsMyNumberSoCallMeMaybe = "";



foreach (str_split($tes) as $letter){
    $convert =strtoupper($letter);
    if (in_array($convert, $ladyGagaTelephone["two"])){
        if (array_keys($ladyGagaTelephone["two"], $convert)[0] === 0){
            $hereIsMyNumberSoCallMeMaybe .= "2";
        } else if (array_keys($ladyGagaTelephone["two"], $convert)[0] === 1){
            $hereIsMyNumberSoCallMeMaybe .= "22";
        } else if (array_keys($ladyGagaTelephone["two"], $convert)[0] === 2){
            $hereIsMyNumberSoCallMeMaybe .= "222";
        }
    } else if (in_array($convert, $ladyGagaTelephone["three"])){
        if (array_keys($ladyGagaTelephone["three"], $convert)[0] === 0){
            $hereIsMyNumberSoCallMeMaybe .= "3";
        } else if (array_keys($ladyGagaTelephone["three"], $convert)[0] === 1){
            $hereIsMyNumberSoCallMeMaybe .= "33";
        } else if (array_keys($ladyGagaTelephone["three"], $convert)[0] === 2){
            $hereIsMyNumberSoCallMeMaybe .= "333";
        }
    } else if (in_array($convert, $ladyGagaTelephone["four"])){
        if (array_keys($ladyGagaTelephone["four"], $convert)[0] === 0){
            $hereIsMyNumberSoCallMeMaybe .= "4";
        } else if (array_keys($ladyGagaTelephone["four"], $convert)[0] === 1){
            $hereIsMyNumberSoCallMeMaybe .= "44";
        } else if (array_keys($ladyGagaTelephone["four"], $convert)[0] === 2){
            $hereIsMyNumberSoCallMeMaybe .= "444";
        }
    } else if (in_array($convert, $ladyGagaTelephone["five"])){
        if (array_keys($ladyGagaTelephone["five"], $convert)[0] === 0){
            $hereIsMyNumberSoCallMeMaybe .= "5";
        } else if (array_keys($ladyGagaTelephone["five"], $convert)[0] === 1){
            $hereIsMyNumberSoCallMeMaybe .= "55";
        } else if (array_keys($ladyGagaTelephone["five"], $convert)[0] === 2){
            $hereIsMyNumberSoCallMeMaybe .= "555";
        }
    } else if (in_array($convert, $ladyGagaTelephone["six"])){
        if (array_keys($ladyGagaTelephone["six"], $convert)[0] === 0){
            $hereIsMyNumberSoCallMeMaybe .= "6";
        } else if (array_keys($ladyGagaTelephone["six"], $convert)[0] === 1){
            $hereIsMyNumberSoCallMeMaybe .= "66";
        } else if (array_keys($ladyGagaTelephone["six"], $convert)[0] === 2){
            $hereIsMyNumberSoCallMeMaybe .= "666";
        }
    } else if (in_array($convert, $ladyGagaTelephone["seven"])){
        if (array_keys($ladyGagaTelephone["seven"], $convert)[0] === 0){
            $hereIsMyNumberSoCallMeMaybe .= "7";
        } else if (array_keys($ladyGagaTelephone["seven"], $convert)[0] === 1){
            $hereIsMyNumberSoCallMeMaybe .= "77";
        } else if (array_keys($ladyGagaTelephone["seven"], $convert)[0] === 2){
            $hereIsMyNumberSoCallMeMaybe .= "777";
        } else if (array_keys($ladyGagaTelephone["seven"], $convert)[0] === 3) {
            $hereIsMyNumberSoCallMeMaybe .= "7777";
        }
    } else if (in_array($convert, $ladyGagaTelephone["eight"])) {
        if (array_keys($ladyGagaTelephone["eight"], $convert)[0] === 0) {
            $hereIsMyNumberSoCallMeMaybe .= "8";
        } else if (array_keys($ladyGagaTelephone["eight"], $convert)[0] === 1) {
            $hereIsMyNumberSoCallMeMaybe .= "88";
        } else if (array_keys($ladyGagaTelephone["eight"], $convert)[0] === 2) {
            $hereIsMyNumberSoCallMeMaybe .= "888";
        }
    } else if (in_array($convert, $ladyGagaTelephone["nine"])) {
        if (array_keys($ladyGagaTelephone["nine"], $convert)[0] === 0) {
            $hereIsMyNumberSoCallMeMaybe .= "9";
        } else if (array_keys($ladyGagaTelephone["nine"], $convert)[0] === 1) {
            $hereIsMyNumberSoCallMeMaybe .= "99";
        } else if (array_keys($ladyGagaTelephone["nine"], $convert)[0] === 2) {
            $hereIsMyNumberSoCallMeMaybe .= "999";
        }  else if (array_keys($ladyGagaTelephone["nine"], $convert)[0] === 3) {
            $hereIsMyNumberSoCallMeMaybe .= "9999";
        }
    }
}

echo $hereIsMyNumberSoCallMeMaybe;