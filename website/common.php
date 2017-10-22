<?php
/**
 * Created by PhpStorm.
 * User: iguest
 * Date: 10/22/17
 * Time: 10:34 AM
 */
function executeSelect($queryString, $errorMessage = "Sorry, this form is experiencing problems.") {
    $connection = new MySQLi('ovid.u.washington.edu', 'root', 'Calendars_5uck','keys',53412);
    if(!$results = $connection->query($queryString)) {
        echo $errorMessage;
        echo "Error: our query failed to execute, and here is why: \n";
        echo "Query: " . $queryString . "\n";
        echo "Errno: " . $connection->errno . "\n";
        echo "Error: " . $connection->error . "\n";
        exit;
    }

    return $results;
}

function executeInsert($queryString, $errorMessage = "Sorry, this form is experiencing problems.") {
    $connection = new MySQLi('ovid.u.washington.edu', 'root', 'Calendars_5uck','keys',53412);
    if(!$results = $connection->query($queryString)) {
        echo $errorMessage;
        echo "Error: our query failed to execute, and here is why: \n";
        echo "Query: " . $queryString . '\n';
        echo "Errno: " . $connection->errno . '\n';
        echo "Error: " . $connection->error . '\n';
        exit;
    }

    return $connection->insert_id;
}