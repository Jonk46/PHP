<?php

if (isset($_GET['action'])) {
    
    if('register' === $_GET['action']) {
        header('Location: ./init/register-form.php');
    }
    if('login' === $_GET['action']) {
        header('Location: ./init/login-form.php');
    }
}
require_once './init/main.php';