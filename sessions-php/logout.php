<?php
include __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

unset($_SESSION["user"]);


header("Location: login.php");
exit;
