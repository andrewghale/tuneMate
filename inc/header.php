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
    <div class="header-wrapper">
        <div class="header">
            <a href="index.php">
                <svg class="logo" width="86" height="71" viewBox="0 0 86 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M0 55C0 63.8366 7.16344 71 16 71V39C7.16344 39 0 46.1634 0 55Z" fill="#4CC8C0"/>
                    <path d="M86 55C86 46.1634 78.8366 39 70 39V71C78.8366 71 86 63.8365 86 55Z" fill="#4CC8C0"/>
                    <line x1="14" y1="46" x2="14" y2="29" stroke="#4CC8C0" stroke-width="4"/>
                    <line x1="72" y1="46" x2="72" y2="29" stroke="#4CC8C0" stroke-width="4"/>
                    <path d="M72 30C72 14.536 59.0163 2 43 2C26.9837 2 14 14.536 14 30" stroke="#4CC8C0" stroke-width="4"/>
                    <line class="eye" x1="24" y1="47.5" x2="36" y2="47.5" stroke="white" stroke-width="3" stroke-linejoin="bevel"/>
                    <line class="eye" x1="50" y1="47.5" x2="62" y2="47.5" stroke="white" stroke-width="3" stroke-linejoin="bevel"/>
                    <path class="mouthmorph" d="M37 60C38 60 40 60 43 60C46 60 48 60 49 60" stroke="white" stroke-width="3" stroke-linejoin="bevel"/>
                    <!-- <line class="mouth" x1="37" y1="59.5" x2="49" y2="59.5" stroke="white" stroke-width="3" stroke-linejoin="bevel"/> -->
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="86" height="71" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <h1><a href="index.php">tuneMate</a></h1>
            <input type="checkbox" class="nav-toggle" id="nav-toggle">
            <nav>
                <ul>
                    <!-- the " on" class highlights current page section -->
                    <li class="books<?php if ($section == "books") { echo " on"; } ?>"><a href="catalog.php?cat=books">Books</a></li>
                    <li class="movies<?php if ($section == "movies") { echo " on"; } ?>"><a href="catalog.php?cat=movies">Movies</a></li>
                    <li class="music<?php if ($section == "music") { echo " on"; } ?>"><a href="catalog.php?cat=music">Music</a></li>
                    <li class="suggest<?php if ($section == "suggest") { echo " on"; } ?>"><a href="suggest.php">Suggest</a></li>
                    <li class="about<?php if ($section == "about") { echo " on"; } ?>"><a href="about.php">About</a></li>
                </ul>
            </nav>
            <label for="nav-toggle" class="nav-toggle-label" id="nav-toggle">
                <span>
                </span>
            </label>
        </div>
    </div>