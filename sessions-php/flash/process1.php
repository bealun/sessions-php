<?php
$message = $_POST["message"] ?? null;

if ($message === "happy") {
    $_SESSION["flashmessage"] = "This is a HAPPY message :-D!!!";
} elseif ($message === "sad") {
    $_SESSION["flashmessage"] = "This is a SAD message :-(...";
}

header("Location: post-redirect.php");
