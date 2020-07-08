<?php

ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "-1");
ini_set("log_errors", "On");
ini_set("memory_limit", "50M");
set_time_limit (0);
date_default_timezone_set("Europe/Kiev");

if(!isset($_POST['action'])) {
    header("Location: start.php");
}