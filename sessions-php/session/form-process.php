<?php
$message = $_POST["message"] ?? null;

if ($message === "yes") {
    $_SESSION["flashmess"] = "Jag har strösslat turglitter över din existens!!";
} elseif ($message === "no") {
    $_SESSION["flashmess"] = "Nehe men skit i det då...";
}

header("Location: ?page=result");
