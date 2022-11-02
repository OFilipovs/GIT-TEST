<?php

$greetings = 'Hello World';
$oneDigit = 9;
$oneDecimal = 10.5;

var_dump($greetings);
var_dump($oneDigit);
var_dump($oneDecimal);

$myName = 'Oscar';
$mySurname = 'Filipov';
$myAge = '30';
echo $myName.' '.$mySurname.' '.$myAge;

$firstNumber = 10;
$firstString = '10';

if ($firstNumber === $firstString){
    echo 'yES';
} else {
    echo 'No';
}


//$items = [
//    [
//        [
//            "name" => "John",
//            "surname" => "Doe",
//            "age" => 50
//        ],
//        [
//            "name" => "Jane",
//            "surname" => "Doe",
//            "age" => 41
//        ]
//    ]
//];
//
//echo $items[0][0]["name"]." ".$items[0][0]["surname"]." ".$items[0][1]["age"];

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][0]["name"]." & ".$items[0][1]["name"]." ".$items[0][1]["surname"]."'S";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number){
    echo $number."\n";
};

for ($i = 0; $i < 10; $i++) {echo $numbers[$i]."\n";}

$i = 0;

while ($i < 10){
    echo "codelex".PHP_EOL;
    $i++;
}

echo PHP_EOL;

$numbersAgain = [1, 3, 4,6,7,9,10,12,13,15,16,18,19,21,22,33,34,45];

foreach ($numbersAgain as $member){
    if ($member % 3 === 0 ){
        echo $member.PHP_EOL;
    }
}

echo PHP_EOL;

$personRegistry = [[name => Ilze, surname => Vavivode, age => 26],[name => Oscar, surname => Filipov, age => 30],[name => Davis, surname => Berry, age => 31]];

foreach ($personRegistry as $person){
    echo "{$person["name"]} {$person["surname"]} {$person["age"]}".PHP_EOL;
}

echo PHP_EOL;