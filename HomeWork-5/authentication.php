<?php

include_once 'config.php';


$auth = false;
function Unauthorized($additionalText)
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo $additionalText;
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    Unauthorized('Button Cancel was pushed =(');
} else {
    $users = json_decode(file_get_contents(__DIR__ . $config['pathPasswords']), JSON_OBJECT_AS_ARRAY);
    $log = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    $hash = password_hash($_SERVER['PHP_AUTH_PW'], PASSWORD_DEFAULT, ['cost => 10']);
    if (count($users) !== 0) {
        //// checkout
        var_dump(!array_key_exists($log, $users));
        if (!array_key_exists($log, $users)) {
            // add user to database
            $users[$log] = $hash;
        } else {
            $user_pass_hash = $users[$log];
            if (false !== password_verify($pass, $user_pass_hash)) {
                $auth = true;
                require_once 'index.php';
            } else {
                Unauthorized('Ошибка!Попробуйте ввести пароль еще раз!');
            }
        }
    } else {
        $users[$log] = $hash;
    }
    file_put_contents(
        __DIR__ . $config['pathPasswords'],
        json_encode($users)
    );
}
