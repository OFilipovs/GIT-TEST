<?php

for ($i = 1; $i < 110; $i += 11){
    for($ix = $i; $ix <= ($i + 10); $ix++){
        if($ix % 3 === 0 && $ix % 5 === 0 && $ix % 7 === 0){
            echo "CozaLozaWoza ";
        } else if ($ix % 3 === 0 && $ix % 7 === 0){
            echo "CozaWoza ";
        } else if($ix % 3 === 0 && $ix % 5 === 0){
            echo "CozaLoza ";
        } else if($ix % 5 === 0 && $ix % 7 === 0){
            echo "LozaWoza ";
        } else if($ix % 3 === 0){
            echo "Coza ";
        } else if($ix % 5 === 0){
            echo "Loza ";
        } else if($ix % 7 === 0){
            echo "Woza ";
        } else{
            echo $ix." ";
        }

    }
    echo PHP_EOL;
}