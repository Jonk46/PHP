<?php
// Об'єднання 2-х масивів з допомогою array_merge. Якщо ключі будуть збігатися, то вони просто перезапишуться.

$array1 = [
    '1stMonthOfSummer' => 'June',
    '2ndMonthOfSummer' => 'July'
];

$array2 = [
    '3rdMonthOfSummer' => 'August'
];

$final_arr1 = array_merge($array1, $array2);

echo "<pre>";
print_r($final_arr1);

// Об'єднання 2-х масивів з допомогою +

$array3 = [
    '1stMonthOfSummer' => 'June',
    '2ndMonthOfSummer' => 'July'
];

$array4 = [
    '3rdMonthOfSummer' => 'August'
];

$final_arr2 = $array3 + $array4;

echo "<pre>";
print_r($final_arr2);


$lc = array('a', 'b' => 'b'); // a має числовий ключ - 0,
$uc = array('A', 'b' => 'B'); // 1-й елемент має числовий ключ - 0, він перезапишеться і стане - 1.
$ac = array_merge($lc, $uc);
echo "<pre>";
print_r($ac);
