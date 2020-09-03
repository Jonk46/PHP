<?php
session_start();

ini_set("display_errors", "On");
ini_set("display_startup_errors", "On");
ini_set("error_reporting", "-1");
ini_set("log_errors", "On");
ini_set("memory_limit", "50M");
set_time_limit (0);
date_default_timezone_set("Europe/Kiev");

include_once __DIR__."/config.php";
include_once __DIR__."/init.php";
include_once __DIR__."/routing.php";