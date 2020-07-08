<?php
session_start();
include_once ("connect.php");
include_once ("../data/functions.php");
$email = $_POST['email'];
$pass = $_POST['pass'];
$error = false;

if(isset($_POST['submit'])) {
    $user2 = new Login($file, $file2, $email, $pass, "Location: ../success.php", "Location: ../loginform.php");
}
