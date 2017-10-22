<?php
/**
 * Created by PhpStorm.
 * User: iguest
 * Date: 10/22/17
 * Time: 12:03 PM
 */

include("LighthouseCommon.php");

$results = executeSelect("select CountryName from Country");

$Array = array();
while($row = $results->fetch_assoc()) {
    $Array[] = $row;
}
echo json_encode($Array);

$results->close();