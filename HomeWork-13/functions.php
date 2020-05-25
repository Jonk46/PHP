<?php

function dd()
{
    if (func_num_args() > 0) {
        echo "<pre>";
        foreach (func_get_args() as $arg) {
            var_dump($arg);
            echo "<br>";
        }
        echo "</pre>";
    }
    exit;
}