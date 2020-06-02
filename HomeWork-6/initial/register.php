<?php

// 0) Register new user

$_POST['email'] = 'user@email.com';
$_POST['pass'] = 'qwerty';

// 1) validate user email
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if (!$email) {
    echo "Wrong user email";
    // redirect user back to the form
}

// 2) check user email 
$password = filter_var($_POST['pass'], FILTER_DEFAULT);
if (empty($password) || mb_strlen($password) < 10) {
    echo "Wrong or empty user password";
    // redirect user back to the form
}


// 3) Generte password hash 
$passHash = password_hash(
    $password,
    PASSWORD_DEFAULT
);

if (false === $passHash) {
    echo "System error occured...";
    // redirect user back to the form
}


/**
 * 4) Create and save user accout
 *      Save it into the file...
 */
file_put_contents(
    implode(';', [
        'email','password'
    ])
    // don't forget append mode here...
);

// 5) redirect to the login form
header("HTTP/1.1 302 Redirect");
header("Location: login.php");

