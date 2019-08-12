<?php

try {
    // creates new PHPDataObject. sqlite database.
    $db = new PDO("sqlite:".__DIR__."/database.db");

    // this will show descriptive error messages
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connection successful";

    // When using MAMP, the catch block doesn't run
    // if the database filename is misspelt; for some reason, it seems to make
    // a new .db file with the misspelt name instead.
} catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}

try {
    $results = $db->query("SELECT title, category, img FROM Media");
    echo "Retrieved Results";
} catch (Exception $e) {
    echo "Unable to retrieve results";
    echo $e->getMessage();
    exit;
}

//

$catalog = $results->fetchAll(PDO::FETCH_ASSOC);