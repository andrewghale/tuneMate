<?php
include("inc/data.php");
include("inc/functions.php");
include("inc/timezone.php");

$pageTitle = "Personal Media Library";
$section = null;

include("inc/header.php"); ?>

<div id="wrapper">
    <p>Welcome to tuneMate! This is a personal project of mine for practicing
        PHP, JS and SASS. More projects on my github profile: github.com/andrewghale
    </p>
    <h2>Random Suggestions:</h2>
    <ul class="items">
    <?php
        $random = array_rand($catalog,4);
        foreach($random as $id) {
            echo get_item_html($id,$catalog[$id]);
        }
    ?>
    </ul>
</div>
<?php include("inc/footer.php"); ?>