<?php

function gravityFormula($time): string
{
    return "New position: ".(0.5 * (-9.81)*($time ** 2) + (0 * $time) + (0));
}

echo gravityFormula(intval(readline("Please provide the falling time: ")))." m";