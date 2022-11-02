<?php
// Exercise-1.php
$randomInput = "Oscar";

function addCodelex($input){
    return $input."codelex";
}

echo addCodelex($randomInput).PHP_EOL;

echo "Exercise-1.php END".PHP_EOL;

// @@@ Exercise 2 @@@

function multiplyByGivenNumber($base, $multiplier){
    return $base * $multiplier;
}

echo multiplyByGivenNumber(10, 5).PHP_EOL;

echo "Exercise 2 END".PHP_EOL;

// @@@ Exercise 3 @@@
$coolPerson = new stdClass();

$coolPerson->name = "Oscar";
$coolPerson->surname = "Filipov";
$coolPerson->age = 19;

function ageCheck($personToCheck){
    if($personToCheck->age > 18){
        echo "{$personToCheck->name}, {$personToCheck->surname}, {$personToCheck->age} is of age".PHP_EOL;
    } else {
        echo "{$personToCheck->name}, {$personToCheck->surname}, {$personToCheck->age} is under age".PHP_EOL;
    }
}

ageCheck($coolPerson);

echo "Exercise 3 END".PHP_EOL;

// @@@ Exercise 4 @@@

$secondCoolPerson = new stdClass();

$secondCoolPerson->name = "Ilze";
$secondCoolPerson->surname = "Filipov";
$secondCoolPerson->age = 26;

$thirdCoolPerson = new stdClass();

$thirdCoolPerson->name = "Davis";
$thirdCoolPerson->surname = "Berry";
$thirdCoolPerson->age = 17;

$persons = [$coolPerson,$secondCoolPerson,$thirdCoolPerson];

function ageCheckVersionTwo($personsToCheck){
    foreach ($personsToCheck as $person){
        if($person->age > 18){
            echo "{$person->name} {$person->surname} {$person->age} is of age".PHP_EOL;
        } else {
            echo "{$person->name} {$person->surname} {$person->age} is under age".PHP_EOL;
    }
    }

}

ageCheckVersionTwo($persons);

echo "Exercise 4 END".PHP_EOL;

// @@@ Exercise  5 @@@

$fruits = [
    ["name" => "apple", "weight" => 6],
    ["name" => "orange", "weight" => 5],
    ["name" => "watermelon", "weight" => 11]
];

$shippingCosts = [ "priceUnderTen" => 1, "priceOverTen" => 2];


function fruitWeightOverTen($product){
    return $product["weight"] > 10;
}

foreach ($fruits as $fruit){
    if (fruitWeightOverTen($fruit)){
        echo "Fruit: {$fruit["name"]} Weight: {$fruit["weight"]} Price: {$shippingCosts["priceOverTen"]}".PHP_EOL;
    } else {
        echo "Fruit: {$fruit["name"]} Weight: {$fruit["weight"]} Price: {$shippingCosts["priceUnderTen"]}".PHP_EOL;
    }
}

echo "Exercise 5 END".PHP_EOL;

// @@@ Exercise 6 @@@

$dataBag = [1, 2, 3, 3.4, "6"];

function doubleTheInteger($givenInteger){
    return $givenInteger * 2;
}

for ($i = 0; $i < count($dataBag); $i++){
    if(is_int($dataBag[$i])){
        echo doubleTheInteger($dataBag[$i]).PHP_EOL;
    }
}

echo "Exercise 6 END".PHP_EOL;

// @@@ Exercise 7 @@@

$personWhoWantsGun = new stdClass();

$personWhoWantsGun->name = "Oscar";
$personWhoWantsGun->licenseLetter = ["A","B", "C"];

$personWhoWantsGun->cashInWallet = 1000;



$handgun = new stdClass();

$handgun->name = "handgun";
$handgun->price = 49;
$handgun->licenseLetter = "C";

$shotgun = new stdClass();

$shotgun->name = "shotgun";
$shotgun->price = 199;
$shotgun->licenseLetter = "B";

$automaticGun = new stdClass();

$automaticGun->name = "automatic gun";
$automaticGun->price = 349;
$automaticGun->licenseLetter = "A";

$guns = [$handgun,$shotgun,$automaticGun];

foreach ($guns as $gun){
    if(in_array($gun->licenseLetter, $personWhoWantsGun->licenseLetter, true)){
        if($gun->price < $personWhoWantsGun->cashInWallet){
            echo "You can buy {$gun->name}".PHP_EOL;
        } else {
            echo "You do not have funds to buy {$gun->name}".PHP_EOL;
        }
    } else {
        echo "You do not have the required license to own {$gun->name}".PHP_EOL;
    }
}

echo "Exercise 7 END".PHP_EOL;

/*
 * clean string from punctuation
 * break down string into words
 * compare words and reverse the second word
 *
 */

$S = "Was a human he saw";
$wordsCompare = explode(" ",str_replace(['?', '!', '.'], '', $S));

$unique = [];

for($i = 0; $i < count($wordsCompare);  $i++){
    for($ix = 1; $ix < count($wordsCompare); $ix++){
        if(strtolower($wordsCompare[$i]) === strtolower(strrev($wordsCompare[$ix])) && strtolower($wordsCompare[$i]) != strtolower($wordsCompare[$ix])){
            $unique[] = $wordsCompare[$i];
            $unique[] = $wordsCompare[$ix];
        }
    }
}


echo join(" ",$unique).PHP_EOL;




echo "Exercise 8 END".PHP_EOL;

$list = [4, 5, 6];

for($i = 0; $i < count($list); $i++){
    $helper = array_keys($list, $list[$i]);
    echo $list[$i];
    echo PHP_EOL;
    var_dump($helper);
    echo PHP_EOL;
    if (count($helper)>1){
        $result = array_keys($list, $list[$i]);
        $xi = $result[0];
        echo $list[$xi];
    } else {
        echo "no solution";
    }

}
echo PHP_EOL;
$a = 1;
echo $a === 1 ? "true" : false;



