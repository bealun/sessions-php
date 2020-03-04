<?php
$siteTitle = " | htmlphp";

error_reporting(-1);
ini_set("display_errors", 1);

$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

$users = [
    "doe" => "doe",
    "admin" => "admin",
    "bea" => "bea",
];
