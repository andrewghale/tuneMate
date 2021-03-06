<?php

function get_item_html($id,$item) {
    // don't echo, should assign output as variable
    $output =
    "<li><a href='"
    . 'details.php?id='
    . $id
    . "' class='item'><img src='"
    . $item['img']
    . "' alt='"
    . $item['title']
    . "' />"
    . "<h3>"
    . $item['title']
    . "</h3>"
    . "<button><span>Details </span></button>"
    . "</a></li>";
    return $output;
}

function array_category($catalog,$category) {
    $output = array();
    foreach ($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort, "The ");
            $sort = ltrim($sort, "A ");
            $sort = ltrim($sort, "An ");
            $output[$id] = $sort;
        }
    }
    asort($output);
    return array_keys($output);
}




