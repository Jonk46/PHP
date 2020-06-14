<?php
// Потрібно знайти в масиві елементи, що задовольняють деяку умову
// Шукаємо всі елементи значення яких більше 100
// Перебір масиву за допомогою циклу foreach:

$array = [1, 2, 3, 4, 400, 870, 5, 6, 7, 96, 8, 9, 10, 850];
$myArray = [];
foreach ($array as $arrayItem) {
    if ($arrayItem > 100) $myArray[] = $arrayItem;
}

echo "<pre>";
var_dump($myArray);

// Функція array_filter()

$myArray2 = array_filter($array, function ($item) {
    return $item > 100 ? true : false;
});

echo "<pre>";
var_dump($myArray2);
