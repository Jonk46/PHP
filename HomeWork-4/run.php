<?php

echo "<pre>";
var_dump($_FILES);
var_dump($_POST);

$allowedMimes = [
    'image/jpeg',
    'image/png',
];

$uploads_dir = 'C:/xampp/htdocs/practice/uploads';
foreach ($_FILES["userfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        if (in_array($_FILES["userfile"]["type"][$key], $allowedMimes)) {
            $tmp_name = $_FILES["userfile"]["tmp_name"][$key];
            $name = basename(sha1_file($tmp_name).'.jpeg');
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
        }
        

    }
}

?>