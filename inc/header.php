<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="header">
        <a href="index.php">
            <div class="logo-wrapper"></div>
        </a>
        <ul class="nav">
            <li class="books<?php if ($section == "books") { echo " on"; } ?>"><a href="catalog.php?cat=books">Books</a></li>
            <li class="movies<?php if ($section == "movies") { echo " on"; } ?>"><a href="catalog.php?cat=movies">Movies</a></li>
            <li class="music<?php if ($section == "music") { echo " on"; } ?>"><a href="catalog.php?cat=music">Music</a></li>
            <li class="suggest<?php if ($section == "suggest") { echo " on"; } ?>"><a href="suggest.php">Suggest</a></li>
        </ul>
    </div>