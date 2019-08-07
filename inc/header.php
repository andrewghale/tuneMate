<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/app.css" type="text/css">
</head>
<body>
    <div class="header">
        <a href="index.php">
            <!-- <div class="logo-wrapper"></div> -->
            <img src="img/tunemate.png" alt="logo"/>
        </a>
        <ul class="nav">
            <!-- the " on" class highlights current page section -->
            <li class="books<?php if ($section == "books") { echo " on"; } ?>"><a href="catalog.php?cat=books">Books</a></li>
            <li class="movies<?php if ($section == "movies") { echo " on"; } ?>"><a href="catalog.php?cat=movies">Movies</a></li>
            <li class="music<?php if ($section == "music") { echo " on"; } ?>"><a href="catalog.php?cat=music">Music</a></li>
            <li class="suggest<?php if ($section == "suggest") { echo " on"; } ?>"><a href="suggest.php">Suggest</a></li>
            <li class="about<?php if ($section == "about") { echo " on"; } ?>"><a href="about.php">About</a></li>
        </ul>
    </div>