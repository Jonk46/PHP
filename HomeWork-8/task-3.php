<?php
// В циклі перебрати елементи масиву і виконати операцію з деякими (або всіма) елементами.

// Цикл Foreach 1st variant

$array1 = [
    '1stMonth' => 'June',
    '2ndMonth' => 'July',
    '3rdMonth' => 'August'
];

foreach ($array1 as $key => $value) {
    print("The $key of summner is $value <br>");
}

// Цикл Foreach 2nd variant

$array2 = ['June', 'July', 'August'];
foreach ($array2 as $value) {
    print("This quarter has such months like $value <br>");
}