<?php
if ($_POST["submit"] ?? false) {
    // Do some processing of the form data
    // for example write to the database.
}

// Redirect to a result page.
$url = "postresult.php";
header("Location: $url");
