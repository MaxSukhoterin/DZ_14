<?php

$array = [0 => "Привіт", 1 => "Пока", 2 => "І знову привіт!", 3 => "І знову пока!"];

function cmp($a, $b)
{
    if (strlen($a) == strlen($b)) {
        return 0;
    } elseif (strlen($a) < strlen($b)) {
        return 1;
    } else {
        return -1;
    }
}
uasort($array, "cmp");
echo "Зворотнє сортування рядків(від більш. до менш.):" . "\n";
print_r($array);
