<?php

$array = [0 => "Привіт", 1 => "Пока", 2 => "І знову привіт!", 3 => "І знову пока!"];

function cmp($a, $b)
{
    if (count(explode(1, $a)) == count(explode(1, $b))) {
        return 0;
    } elseif (count(explode(1, $a)) < count(explode(1, $b))) {
        return 1;
    } else {
        return -1;
    }
}
// uasort($array, "cmp");
print_r(explode(1, $array[0]));
// print_r(count(explode(";", implode(";", $array))));
