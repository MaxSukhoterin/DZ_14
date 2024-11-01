<?php

$n = rand(10, 20);
// echo $n;

function sum_row()
{
    global $n;
    global $str;
    for ($i = 0; $i <= $n; $i++) {
        static $i;
        // global $str;
        // echo "\n";
        $str = pow($i, 2) . " ";
        // sum($str);
        echo $str;
        $sum = str_split($str, 4);
        array_sum($sum);
        // print_r($sum);
        echo $sum;
        // $exp = explode($str, " ");
        // print $exp;
    }
    ;

};
sum_row();
// sum($str);
