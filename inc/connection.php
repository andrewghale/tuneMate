<?php

try {
    // creates new PHPDataObject. sqlite database.
    $db = new PDO("sqlite:".__DIR__."/database.db");
    // this will show descriptive error messages
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // When using MAMP, the catch block doesn't run
    // if the database filename is misspelt; it seems to make
    // a new .db file with the misspelt name instead.
} catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}

echo "Connected to the database";