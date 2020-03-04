<?php
include __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";
// $title = "Login $siteTitle";
// include __DIR__ . "/view/header.php";
// include __DIR__ . "/view/login.php";

echo "<pre>";
var_dump($_POST);
var_dump($users);

$user = $_POST["user"] ?? null;
$password = $_POST["password"] ?? null;

$isValidUser = false;
if ($users[$user] === $password) {
      $_SESSION["user"] = $user;
      // $isValidUser = true;
      header("Location: session.php");
      exit;
}

header("Location: login.php");
exit;

// include __DIR__ . "/view/byline.php";
// include __DIR__ . "/view/time.php";
// include __DIR__ . "/view/footer.php";
die();
