<?php
include __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";
$title = "Session $siteTitle";
include __DIR__ . "/view/header.php";
$pageReference = $_GET["page"] ?? "index";

$pages = [
    "index" => [
        "title" => "Intro",
        "file" => __DIR__ . "/session/index.php",
        "visible" => true,
    ],
    "show-session" => [
        "title" => "Innehåll",
        "file" => __DIR__ . "/session/show-session.php",
        "visible" => true,
    ],
    "content-session" => [
        "title" => "Värde",
        "file" => __DIR__ . "/session/content-session.php",
        "visible" => true,
    ],
    "destroy-session" => [
        "title" => "Avsluta",
        "file" => __DIR__ . "/session/destroy-session.php",
        "visible" => true,
    ],
    "form" => [
        "title" => "Fråga",
        "file" => __DIR__ . "/session/form.php",
        "visible" => true,
    ],
    "form-process" => [
        "title" => "Process",
        "file" => __DIR__ . "/session/form-process.php",
        "visible" => false,
    ],
    "result" => [
        "title" => "Resultat",
        "file" => __DIR__ . "/session/result.php",
        "visible" => false,
    ],
    "contact-me" => [
        "title" => "Kontakta mig",
        "file" => __DIR__ . "/session/contact-me.php",
        "visible" => true,
    ],
    "post-process" => [
        "title" => "Process",
        "file" => __DIR__ . "/session/post-process.php",
        "visible" => false,
    ],
    "post-result" => [
        "title" => "Resultat",
        "file" => __DIR__ . "/session/post-result.php",
        "visible" => false,
    ],
];

$page = $pages[$pageReference] ?? null;

$title = $page["title"] ?? "404";
$title .= "Session $siteTitle";

include __DIR__ . "/view/session.php";
include __DIR__ . "/view/byline.php";
include __DIR__ . "/view/time.php";
include __DIR__ . "/view/footer.php";
