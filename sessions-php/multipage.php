<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";
$pageReference = $_GET["page"] ?? "index";

$pages = [
    "index" => [
        "title" => "Multisida: ",
        "file" => __DIR__ . "/multipage2/index.php",
        "visible" => true,
    ],
    "print-get" => [
        "title" => "Key/Value: ",
        "file" => __DIR__ . "/multipage2/keyvalue.php",
        "visible" => true,
    ],
    "print-server" => [
        "title" => "\$_SERVER: ",
        "file" => __DIR__ . "/multipage2/print-server.php",
        "visible" => true,
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title .= "Multisida $siteTitle";
require __DIR__ . "/view/header.php";

require __DIR__ . "/view/multipage12.php";
require __DIR__ . "/view/byline.php";
require __DIR__ . "/view/time.php";
require __DIR__ . "/view/footer.php";
