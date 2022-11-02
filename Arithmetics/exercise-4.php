<?php
$min = 3;
$max = 6;
function factorial($start, $end){
    $total = $end;
    for($i = $end -1; $i >= $start; $i--){
        $total *= $i;
    }

    return $total;
}

echo factorial($min, $max);