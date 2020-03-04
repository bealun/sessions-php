<!DOCTYPE html>
<html lang="sv">
<head>
  <title><?= $title?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel='shortcut icon' href='img/fav.png'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=2.0;">
</head>

<body>
    <header>
      <img src="img/Beas.jpg" class="me" alt="Bea">
      <span class="site-title"></span>
      <span class="site-slogan"></span>
    </header>

<?php
if (isset($_SESSION["user"])) {
    echo "'{$_SESSION["user"]}' är inloggad.";
    echo "<a href=\"logout.php\">Logout</a>";
}

include __DIR__ . "/navbar.php";
include __DIR__ . "/flashmessage.php";
?>
