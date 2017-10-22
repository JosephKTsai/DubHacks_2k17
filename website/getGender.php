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
while($row = $results->fetch_array(MYSQL_ASSOC)) {
    $Array[] = $row;
}
echo json_encode($Array);

$result->close();
$mysqli->close();