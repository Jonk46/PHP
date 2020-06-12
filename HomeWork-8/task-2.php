<?php
//  Потрібно зберегти в масиві серію послідовних цілих чисел.

$firstNumber = 1; // перше число
$lastNumber = 88; // друге число
$stepOfNumber = 4; // число на яке буде збільшуватись

$numbers = range($firstNumber, $lastNumber, $stepOfNumber); // використання функції Range

echo "<pre>";
print_r($numbers);
