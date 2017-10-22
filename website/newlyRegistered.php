<?php  /*

include("LighthouseCommon.php");

$FName = $_GET["firstname"];
$LName = $_GET["lastname"];
$GenderName = $_GET["Gender"];
echo ($GenderName);
$CountryName = $_GET["country"];
$UserName = $_GET["username"];
$Password = $_GET["password"];
$Email = $_GET["email"];
$JargonName = $_GET["language"];
$Culture = $_GET["culture"];
echo ($FName);

$GenderResults = executeSelect("select top 1 GenderID from Gender where GenderName = '$GenderName''");
$GenderIDArray = $GenderResults->fetch_assoc();
$GenderID = $GenderIDArray["GenderID"];

$JargonResults = executeSelect("select top 1 JargonID from Jargon where JargonName = $JargonName");
$JargonIDArray = $JargonResults->fetch_assoc();
$JargonID = $JargonIDArray["JargonID"];

$CountryResults = executeSelect("select top 1 CountryID from Country where CountryName = $CountryName");
$CountryIDArray = $CountryResults->fetch_assoc();
$CountryID = $CountryIDArray["CountryID"];

$PersonID = executeInsert("insert into Person
(FName, LName, CountryID, JargonID, Email, UserName, UserPass, GenderID, Culture)
VALUES
('$FName', '$LName', $CountryID, $JargonID, '$Email', '$UserName', '$Password', $GenderID, '$Culture')
");

*/  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico"/>
    <title>Document</title>


    <!-- Bootstrap CSS -->
    <link 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" type="text/css" />

    <!--Font families -->
    <link 
        href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">


    <!-- Font Awesome icon font -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous" type="text/css" />

    <!-- Your stylesheet -->
    <link rel="stylesheet" href="css/newlyRegisteredStyle.css" type="text/css" />
    <title>Lighthouse</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="homepage.html">Lighthouse</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="homepage.html">Home</a></li>
            <li><a href="registration.html">Register</a></li>
            <li><a href="profile.html">Your Profile</a></li>
            </ul>
        </div>
    </nav>

    <!-- Header of the whole page -->
    <header>
        <div id="headerBackground">
            <h1 id="welcomeHeader">Welcome to the Lighthouse party!</h1>

            <a href="profile.html">Click here to get connectin'!</a>
        </div>
    </header>

</body>
</html>