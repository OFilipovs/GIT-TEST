<?php

class GeometryCalc {
    function circleArea()
    {
        $r = readline("Enter radius: ");
        if ($r > 0){
            return M_PI * $r * 2;
        } else {
            return "Error";
        }

    }

    function rectangleArea()
    {
        $length = readline("Enter rectangle length: ");
        $width = readline("Enter rectangle width: ");

        if ($length < 0 || $width < 0){
            return "Error";
        } else {
            return $length * $width;
        }

    }

    function triangleArea()
    {
        $base = readline("Enter base length: ");
        $height = readline("Enter height: ");

        if ($base < 0 || $height < 0){
            return "Error";
        } else {
            return $base * $height * 0.5;
        }
    }
}

$userInput = 0;

while ($userInput != 4){
    if ($userInput === 1){
        $circle = new GeometryCalc();
        echo "Your area is: ".$circle->circleArea().PHP_EOL;
    } else if ($userInput === 2){
        $rectangle = new GeometryCalc();
        echo "Your area is: ".$rectangle->rectangleArea().PHP_EOL;
    } else if ($userInput === 3){
        $triangle = new GeometryCalc();
        echo "Your area is: ".$triangle->triangleArea().PHP_EOL;
    } else {
        echo "Wrong selection. Try again !".PHP_EOL;
    }
    echo PHP_EOL;
    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle".PHP_EOL;
    echo "2. Calculate the Area of a Rectangle".PHP_EOL;
    echo "3. Calculate the Area of a Triangle".PHP_EOL;
    echo "4. Quit\n";
    echo PHP_EOL;

    $userInput = intval(readline("Enter your choice (1-4): "));

}
