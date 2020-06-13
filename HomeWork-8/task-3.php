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

//2. Можно воспользовать циклом for, например:

$total = 0;
$array3 = [1, 2, 3, 4, 5];
$amount = count($array3);
for ($i = 0; $i < $amount; $i++) {
    $total += $array3[$i];
}
echo $total;

// each() з list() і while

$total2 = 0;
$array4 = [1, 2, 3, 4, 5];
reset($array4);
while (list($key, $value) = each($array4)) {
    $total2 += $array4[$key];
}
echo "<br>" . $total2;
