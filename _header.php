<?php
require_once __DIR__ . "/inc/config.php";
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics [script added: 2019-01-05] -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131763038-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-131763038-2');
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- cdn Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- local CSS -->
    <link rel="stylesheet" href="css/master.css">
    <title>Build for All - <?php echo $pageTitle ?></title>
</head>
<body class="background-white margin-auto">

    <a class="skip-main" href="#main-content" id="skip-to-main">Skip to main content</a>

    <nav class="navbar navbar-expand-sm fixed-top navbar-light background-white">
        <a href="index.php"><span class="navbar-brand mb-0 h1 font-bold" style="padding-left: 10px; color: var(--text-color-grey)" id="nav-index">Build for All</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li> -->
        </ul>
        <span class="navbar-text" style="padding-right: 10px;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link color-grey" href="content.php" id="nav-content">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-grey" href="content-page.php?article=1" id="nav-definitions">Definitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-grey" href="resources.php" id="nav-resources">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-grey" href="about.php" id="nav-about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-grey" href="contact.php" id="nav-contact">Contact</a>
                </li>
            </ul>
        </span>
    </div>
</nav>

<p id="main-content" tabindex="-1" aria-describedby="You are now in the main content"></p>
