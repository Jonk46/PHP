<?php

$file = __DIR__."/data/logs.txt";
$file2 = __DIR__."/data/names.txt";

if(isset($_POST['registerSubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passconfirm = $_POST['passconfirm'];
    $user = new classRegister($pass, $passconfirm, $email, $name, $file, $file2, "views/registerform.php", "views/loginform.php");
}

if(isset($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $error = false;
    $user2 = new classLogin($file, $file2, $email, $pass, "views/success.php", "views/loginform.php");
}

if(!isset($_POST['action'])) {
    require_once __DIR__."/views/start.php";
} else {
    if($_POST['action'] === 'register') {
        require_once __DIR__."/views/registerform.php";
        exit;
    }
    if($_POST['action'] === 'login') {
        require_once __DIR__."/views/loginform.php";
        exit;
    }
}

function rout($folder, $path) {
    require_once (sprintf('%s/../../%s', $folder, $path));
    exit;
}
