<?php

session_start ();
$nameError = "";
$fromError = "";
$subjectError = "";
$messageError = "";

if(isset($_POST['submit'])) {
    $name = htmlspecialchars ($_POST["name"]);
    $from = htmlspecialchars ($_POST["from"]);
    $subject = htmlspecialchars ($_POST["subject"]);
    $message = htmlspecialchars ($_POST["message"]);
    $_SESSION['name'] = $name;
    $_SESSION['from'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;
    $error = false;

    if (strlen($name) <= 1) {
        $nameError = "Введите корректное имя";
        $error = true;
    }

    if ($from == "" || !preg_match("/@/", $from)) {
        $fromError = "Введите корректный email";
        $error = true;
    }

    if (strlen($subject) == 0) {
        $subjectError = "Введите тему сообщения";
        $error = true;
    }

    if (strlen($message) == 0) {
        $messageError = "Введите сообщение";
        $error = true;
    }

    if(!$error) {
        $file = 'mail.txt';
        $info = $name." :\n".$from."\n".$subject."\n".$message."\n";
        file_put_contents($file, $info, FILE_APPEND | LOCK_EX);
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $to = 'jonk6233@gmail.com';
        $headers = "From: $from\r\nReplyto: $to\r\nContent-type: text/plain; charset=utf-8\r\n";
        mail ($to, $subject, $message, $headers);
        header ("Location: success.php");
    }
}
?>