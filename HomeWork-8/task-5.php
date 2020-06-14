<?php
// Перетворити масив в відформатований рядок

$array = [
    '1stMonthOfSummer' => 'June',
    '2ndMonthOfSummer' => 'July',
    '3rdMonthOfSummer' => 'August'
];

// Побудова стрічки в циклі

foreach ($array as $key => $value) { // перебирається масив
    $string .= ", $value"; // запис по черзі в кінець стрічки
}
$string = substr($string, 2); // видаляємо першу кому з пробілом

echo $string . "<br>";

// Функція join()

$string2 = join(', ', $array);
echo $string2 . "<br>";

// Функція implode()

$string3 = implode(', ', $array);
echo $string3 . "<br>";

//Функція serialize() для перетворення складних масивів в рядок і використання зворотного процесу unserialize ()

$string4 = serialize($array);
echo $string4 . "<br>";
$array2 = unserialize($string4);
echo "<pre>";
var_dump($array2);
