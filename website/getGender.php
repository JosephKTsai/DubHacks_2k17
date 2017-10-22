<?php
/**
 * Created by PhpStorm.
 * User: iguest
 * Date: 10/22/17
 * Time: 12:03 PM
 */

include("LighthouseCommon.php");

$results = executeSelect("select GenderName from Gender");

$Array = array();
if ($result = $mysqli->query("SELECT * FROM phase1")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
        $Array[] = $row;
    }
    echo json_encode($myArray);
}

$result->close();
$mysqli->close();