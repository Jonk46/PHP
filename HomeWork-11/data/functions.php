<?php
session_start();
interface CheckFormParametres
{
    public function check_mail ($mail, $path);
    public function check_pass($pass, $path);
}
trait Checking
{
    public function check_mail($email_address, $path) {
        $email = filter_var($email_address, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $_SESSION['message'] = "Wrong user email";
            header($path);
        }
    }
    public function check_pass ($pass_user, $path) {
        $password = filter_var($pass_user, FILTER_DEFAULT);
        if (empty($password) || mb_strlen($password) < 10) {
            $_SESSION['message'] = "Wrong or empty user password. Password must be at least 10 characters.";
            header($path);
        }
    }
}

interface FileActions
{
    public function file_put($key, $value, $path);
    public function file_get($f);
}
trait Activity
{
    public function file_put($key, $value, $path) {
        $json = $this->file_get($path);
        if(count($json) === 0) {
            $info = json_encode([$key=>$value]);
            file_put_contents($path, $info,  FILE_APPEND);
        } else {
            $json[$key] = $value;
            $info = json_encode($json);
            file_put_contents($path, "");
            file_put_contents($path, $info,  FILE_APPEND);
            }
}
    public function file_get($f) {
        $data = file_get_contents($f);
        return $accounts = json_decode($data, true);
    }
}

class Register implements CheckFormParametres, FileActions {
    use Checking;
    use Activity;
    private $passHash;
    public function __construct($p, $pc, $e, $n, $f, $f2)
    {
        if ($p === $pc) {
            $this->check_mail($e, "Location: ../registerform.php");
            $this->check_pass($p, "Location: ../registerform.php");
            $this->passHash = password_hash($p, PASSWORD_DEFAULT);
            $this->check_hash($this->passHash, "Location: ../registerform.php");
            if(!$_SESSION['message']) {
                $this->file_put($e, $this->passHash, $f);
                $this->file_put($e, $n, $f2);
                header("Location: ../loginform.php");
            }
        } else {
            $_SESSION['message'] = "Passwords don't match";
            header("Location: ../registerform.php");
        }
    }
    private function check_hash($ph, $path) {
        if (false === $ph) {
            $_SESSION['message'] = "System error occured...";
            header($path);
        }
    }
}


class Login implements CheckFormParametres, FileActions {
    use Checking;
    use Activity;
    private $mail_pass;
    private $valid_users;
    private $validated;
    private $mail_name;
    private $nameuser;
    private $options = array('cost' => 11);
    private $newHash;
    public function __construct($file, $file2, $e, $p, $path1, $path2)
    {
        $this->check_mail($e, "Location: ../loginform.php");
        $this->check_pass($p, "Location: ../loginform.php");
        if (!$_SESSION['message']) {
            $this->mail_pass = $this->file_get($file);
            $this->valid_users = array_keys($this->mail_pass);
            $this->validated = (in_array($e, $this->valid_users)) && (password_verify($p, $this->mail_pass[$e]));

            if ($this->validated) {
                $this->mail_name = $this->file_get($file2);
                $this->nameuser = $this->mail_name[$e];
                $_SESSION['nameuser'] = $this->nameuser;
                if (password_needs_rehash($this->mail_pass[$e], PASSWORD_DEFAULT, $this->options)) {
                    $this->newHash = password_hash($p, PASSWORD_DEFAULT, $this->options);
                    $this->mail_pass[$e] = $this->newHash;
                    file_put_contents($file, "");
                    foreach ($this->mail_pass as $k => $v) {
                        $this->file_put($k, $v, $file);
                    }
                }
                header($path1);
            } else {
                $_SESSION['message'] = "You are not authorized";
                header($path2);
            }
    }
    }
}