<?php
ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "-1");
ini_set("log_errors", "On");
ini_set("memory_limit", "50M");
set_time_limit (0);
date_default_timezone_set("Europe/Kiev");

include_once "config.php";
include_once "functions.php";
include './authentication.php';

if(isset($_FILES['files'])) {

   foreach ($_FILES['files']['size'] as $filesizekey=>$filesizevalue) {
       if ($filesizevalue > 15728640) {
           $error = true;
           $errorsize = "File {$_FILES['files']['name'][$filesizekey]} is larger than the permissible size 15 Mb";
       }
   }
   foreach ($_FILES['files']['type'] as $filetypekey=>$filetypevalue) {
       if (!preg_match("/image/", $filetypevalue)) {
           $error = true;
           $errortype = "File {$_FILES['files']['name'][$filetypekey]} doesn't meet the download requirements. Only images accepted.";
       }
   }
   foreach ($_FILES['files']['error'] as $fileerrorkey=>$fileerrorvalue) {
       if ($fileerrorvalue !== UPLOAD_ERR_OK) {
           codeToMessage($fileerrorvalue);
       } else if(!$error) {
           $success = "File uploaded successfully!";
       }
   }
   foreach ($_FILES['files']['tmp_name'] as $namekey=>$namevalue) {
       if(!$error) {
           $newfilepath = getNewPath($uploaddir, $namevalue);
           uploadFile($namevalue, $newfilepath);
       }
   }
}
?>


