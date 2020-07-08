<?php
if(isset($_POST['register'])) {
    header("Location: registerform.php");
}

if (isset($_POST['login'])) {
    header("Location: loginform.php");
}
