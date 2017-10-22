<?php

include("common.php");

$FName = $_POST["firstname"];
$LName = $_POST["lastname"];
$GenderName = $_POST["Gender"];
$CountryName = $_POST["country"];
$UserName = $_POST["username"];
$Password = $_POST["password"];
$Email = $_POST["email"];
$JargonName = $_POST["Jargon"];
$Culture = $_POST["Jargon"];

$GenderResults = executeSelect("select top 1 GenderID from Gender where GenderName = $GenderName");
$GenderIDArray = $GenderResults->fetch_assoc();
$GenderID = $GenderIDArray["GenderID"];

$JargonResults = executeSelect("select top 1 JargonID from Jargon where JargonName = $JargonName");
$JargonIDArray = $JargonResults->fetch_assoc();
$JargonID = $JargonIDArray["JargonID"];

$CountryResults = executeSelect("select top 1 CountryID from Country where CountryName = $CountryName");
$CountryIDArray = $CountryResults->fetch_assoc();
$CountryID = $CountryIDArray["CountryID"];

executeInsert("insert into Person
                            (CountryID, JargonID, Email, UserName, UserPass, GenderID, Culture)
                          VALUES
                            ($CountryID, $JargonID, $Email, $UserName, $Password, $GenderID, $Culture)
             ");

 header("Location: website/newlyRegistered.php");