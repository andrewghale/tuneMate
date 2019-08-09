<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    } else if ($_GET["cat"] == "music") {
        $pageTitle = "Music";
        $section = "music";
    }
}

include("inc/header.php"); ?>

<div id="wrapper">
    <p>
        <?php
        if ($section != null) {
            // Shows breadcrumbs starting from full catalog
            echo "<span class='breadcrumbs'><a href='catalog.php'>Full Catalog</a> &gt; ";
        } echo $pageTitle . "</span>";
        ?>
    </p>
    <ul class="items">
    <?php
        $categories = array_category($catalog,$section);
        foreach($categories as $id) {
            // this custom function displays item details
            echo get_item_html($id,$catalog[$id]);
        }
    ?>
    </ul>
</div>

<?php include("inc/footer.php"); ?>