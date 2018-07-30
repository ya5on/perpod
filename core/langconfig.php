<?php
session_start();

if (!isset($_SESSION ['lang']))
    $_SESSION['lang'] = "ukr";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "ukr")
        $_SESSION['lang'] = "ukr";
    else if ($_GET['lang'] == "rus")
        $_SESSION['lang'] = "rus";

    }

    require_once "languages/" . $_SESSION['lang'] . ".php";