<?php

$config = array(
    "pathPasswords" => "./data.json",
    "costPass" => [
        'cost' => 10,
    ],
    "newCostPass" => [
        'cost' => 11,
    ],
    "errMsg" => [
        0 => 'Enter a valid login',
        1 => 'Password must contain at least 10 characters',
        2 => 'System error, enter password again',
        3 => 'Invalid password, enter again',
        4 => "Sorry, but the user with this login is not registered! Register now!",
        5 => 'Password mismatch',
        6 => 'You are already registered, please log in'
    ],
    "redirPath" => [
        "logForm" => 'Location: ./init/login-form.php',
        "succAuth" => 'Location: ./init/successAuth.php',
        "regForm" => 'Location: ./init/register-form.php',
        "index" => 'Location: ./index.php',
    ]
);