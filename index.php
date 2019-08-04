<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
$section = null;

include("inc/header.php"); ?>
<div id="content">
    <div class="section catalog random">
            <h2>Random Suggestions:</h2>
            <ul class="items">
            <?php
                $random = array_rand($catalog,3);
                foreach($random as $id) {
                    echo get_item_html($id,$catalog[$id]);
                }
            ?>
            </ul>
        </div>
    </div>
<?php include("inc/footer.php"); ?>