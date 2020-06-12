<?php
// Зберігання декількох елементів для кожного ключа

$fruits = array(); // створюю пустий масив
$fruits['red'][] = 'strawberry'; // присвоюю 1-ше значення для ключа 'red'
$fruits['red'][] = 'apple'; // присвоюю 1-ше значення для ключа 'red'
$fruits['yellow'][] = 'banana'; //  присвоюю 1-ше значення для ключа 'yellow'

echo "<pre>";
print_r($fruits);

// Цикл foreach використовую для почергового виведення елементів з масиву

foreach ($fruits as $color => $color_fr) { // $color - ключ, $color_fr - значення, яке є числовим масивом
    foreach ($color_fr as $fruit) { // $fruit - значення числового масива $color_fr
        print "$fruit is colored $color.<br>"; // Вивожу фрукту і їх кольори при кожній ітерації foreach
    }
}
