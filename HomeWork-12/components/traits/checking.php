<?php
trait checking
{
    public function check_mail($email_address) {
        $email = filter_var($email_address, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $error = "Wrong email address.";
            return $error;
        } else return false;
    }
    public function check_pass ($pass_user) {
        $password = filter_var($pass_user, FILTER_DEFAULT);
        if (empty($password) || mb_strlen($password) < 10) {
            $error = "Wrong or empty user password. Password must be at least 10 characters.";
            return $error;
        } else return false;
    }
}
