<?php
require __DIR__ . "/config.php";
$_SESSION["email"] = $_POST["email"];
$_SESSION["title"] = $_POST["title"];
$_SESSION["subject"] = $_POST["subject"];
$_SESSION["message"] = $_POST["message"];
if (isset($_POST["submit"])) : ?>
    <output>
    <p>Tack för ditt meddelande!</p>
    <pre>
    <?= htmlentities(print_r($_POST, 1)) ?>
    </pre>
    </output>
<?php endif; ?>
<?php header("Location: ?page=post-result"); ?>
