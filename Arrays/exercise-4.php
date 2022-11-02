<?php
$firstBag = [];
$secondBag = [];
for ($i = 0; $i < 10; $i++){
    $firstBag[] = rand(1,100);
}

for ($i = 0; $i < count($firstBag); $i++){
    $secondBag[] = $firstBag[$i];
}

$firstBag[9] = -7;

echo "Array 1: ".implode(" ", $firstBag).PHP_EOL;
echo "Array 2: ".implode(" ", $secondBag);