<?php
// Застосування функції до кожного елементу масиву

// Використання функції array_walk () для одновимірних масивів:

$names = array(
    'firstname' => "Baba",
    'lastname' => "O'Riley"
); // одномірний масив
array_walk($names, function (&$value, $key) {  // значення $value передається по посиланню для того, щоб змінювався масив, а не його копія
    $value = htmlentities($value, ENT_QUOTES); // htmlentities () кодує ключові сутності HTML і присвоює результат $value
});
foreach ($names as $name) {
    print $name . "<br>";  // в результаті
}

// Використання функції array_walk_recursive () для вкладених даних

$names2 = array(
    'firstnames' => array("Baba", "Bill"),
    'lastnames' => array("O'Riley", "O'Reilly")
);
array_walk_recursive($names2, function (&$value, $key) { // звернення до вкладеного масиву
    $value = htmlentities($value, ENT_QUOTES);
});
foreach ($names2 as $nametypes) {
    foreach ($nametypes as $name) {
        print $name . "<br>";  // // в результаті
    }
}
