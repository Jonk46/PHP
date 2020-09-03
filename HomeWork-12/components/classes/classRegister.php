<?php

class classRegister implements checkFormParametres, fileActions {
    use checking;
    use activity;
    private $passHash;
    public function __construct($p, $pc, $e, $n, $f, $f2, $path, $newpass)
    {
        $this->passHash = password_hash($p, PASSWORD_DEFAULT);
        $this->check_hash($this->passHash);

        if ($p === $pc) {
            if ($this->check_mail($e)) {
                $_SESSION['message'] = $this->check_mail($e);
                rout(__DIR__, $path);
            } elseif ($this->check_pass($p)) {
                $_SESSION['message'] = $this->check_pass($p);
                rout(__DIR__, $path);
            } else {
                $this->file_put($e, $this->passHash, $f);
                $this->file_put($e, $n, $f2);
                rout(__DIR__, $newpass);
            }
        } else {
            $_SESSION['message'] = "Passwords don't match";
            rout(__DIR__, $path);
        }
    }
    private function check_hash($ph) {
        if (false === $ph) {
            $_SESSION['message'] = "System error occured...";
            rout(__DIR__, $path);
        }
    }
}