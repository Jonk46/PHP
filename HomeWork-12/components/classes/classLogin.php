<?php

class classLogin implements checkFormParametres, fileActions {
    use checking;
    use activity;
    private $mail_pass;
    private $valid_users;
    private $validated;
    private $mail_name;
    private $nameuser;
    private $options = array('cost' => 11);
    private $newHash;
    public function __construct($file, $file2, $e, $p, $path1, $path2)
    {
        if ($this->check_mail($e)) {
            $_SESSION['message'] = $this->check_mail($e);
            rout(__DIR__, $path2);
        } elseif ($this->check_pass($p)) {
            $_SESSION['message'] = $this->check_pass($p);
            rout(__DIR__, $path2);
        } else {
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
                rout(__DIR__, $path1);
            } else {
                $_SESSION['message'] = "You are not authorized";
                rout(__DIR__, $path2);
            }
        }
    }
}
