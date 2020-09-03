<?php

function autoloadClasses($name) {
    $filePath = sprintf("%s/%s/%s.php", ROOT, 'components', $name);
    if(file_exists($filePath)) {
        include_once $filePath;
    }
}

spl_autoload_register('autoloadClasses', true);