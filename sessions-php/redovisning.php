<?php
include __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";
$title = "Redovisning $siteTitle";
include __DIR__ . "/view/header.php";

include __DIR__ . "/view/redovisning.php";

include __DIR__ . "/view/byline.php";
include __DIR__ . "/view/time.php";
include __DIR__ . "/view/footer.php";
