<?php
session_start();
include_once ("connect.php");
include_once ("../data/functions.php");
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$passconfirm = $_POST['passconfirm'];

if(isset($_POST['submit'])) {
    $user = new Register($pass, $passconfirm, $email, $name, $file, $file2);
}




