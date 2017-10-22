<?php
/**
 * Created by PhpStorm.
 * User: iguest
 * Date: 10/22/17
 * Time: 11:21 AM
 */
include("common.php");

$UserName = $_POST["username"];

$PersonResults = executeSelect("select top 1 PersonID from Person where UserName = $UserName");
$PersonIDArray = $PersonResults->fetch_assoc();
$PersonID = $PersonIDArray["PersonID"];

$PersonDetailsArray = executeSelect("select * from vPersonDetails where PersonID = $PersonID");
