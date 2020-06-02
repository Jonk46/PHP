<?php

// 0) Start sessions at the top of the our script
session_start();

// 1) Register new user
$_POST['email'] = 'user@email.com';
$_POST['pass'] = 'qwerty';

// 2) validate user email
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if (!$email) {
    echo "Wrong user email";
    // redirect user back to the form
}

// 3) check user email 
$password = filter_var($_POST['pass'], FILTER_DEFAULT);
if (empty($password) || mb_strlen($password) < 10) {
    echo "Wrong or empty user password";
    // redirect user back to the form
}

// 4) Find user account info
$accounts = file_get_contents('accounts.log');
if (in_array($email, $accounts)) {
    if (false === password_verify($password, $accounts[$email])) {
        echo "Sorry, wrong password";
        // back user to the LOGIN form again
    }
} else {
    echo "Sorry, but user with this email address not registered";
    // back user to the LOGIN form, again
}

/**
 * 5) 
 * RE-hash and RE-save user password again
 * IT will be your's HOME WORK
 * 
 * Use password_needs_rehash
 * See more at: https://www.php.net/manual/ru/function.password-needs-rehash
 */

 
 /**
  * 6) Save a login state in the session
  * Sessions tomorrow
  * 
  * Output "You are logged in on the page"
  * 
  */
 $_SESSION['logged_in'] = 'yes';
 $_SESSION['email'] = $email;

