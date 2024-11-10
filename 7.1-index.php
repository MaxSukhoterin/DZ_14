<?php

$n = rand(10, 20);
// echo $n;

function sum_row($n)
{
    // global $n;
    // global $sum;
    // static $i;
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += pow($i, 2);

    }
    ;
    return $sum;
};
echo sum_row($n);
