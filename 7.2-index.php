<?php

function books_information($name_book="-",$name_author="-",$surname_author="-",$year_book="-",$publishing_house="-",){
    $book = "Name: $name_book, Author: $name_author $surname_author, Year: $year_book, Publishing house: $publishing_house";
    return $book;
}
$name_book = "Дон Кіхот";
$name_author = "Мігель";
$surname_author = "Де Сервантес";
$year_book = "1605";
echo books_information($name_book, $name_author, $surname_author, $year_book);
