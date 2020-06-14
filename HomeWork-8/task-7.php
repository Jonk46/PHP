<?php
// Потрібно реалізувати власну процедуру сортування
// Використання функції sort ():

$array1 = array('5-month', '1-month', '3-month', '2-month', '4-month');
sort($array1);
echo "<pre>";
var_dump($array1); // сортирует с учетом регистр, не сохраняя ключи

// Використання функції natcasesort():

natcasesort($array1);
echo "<pre>";
var_dump($array1);

// Використання функції asort():

$array2 = array('5-month', '1-month', 'Month-3', 'Month-2', '4-month');
asort($array2);
echo "<pre>";
var_dump($array2); // сортує з урахуванням регістру, зберігаючи ключі

// Сортування в зворотньому порядку

$month = array('5-month', '1-month', '3-month', '2-month', '4-month');
usort($month, function ($a, $b) {
    return strnatcmp($b, $a); // сортування відбувається в зворотньому порядку
});

echo "<pre>";
var_dump($month);
