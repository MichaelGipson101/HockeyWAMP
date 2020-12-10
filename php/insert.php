<?php

$link = mysqli_connect("localhost", "root", "", "hockeystats");
 

if($link === false){
    die("Unable to connect to Database. " . mysqli_connect_error());
}
 

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$goals = mysqli_real_escape_string($link, $_REQUEST['goals']);
$assists = mysqli_real_escape_string($link, $_REQUEST['assists']);
$season = mysqli_real_escape_string($link, $_REQUEST['season']);
 

$sql = "INSERT INTO players (first_name, last_name, goals, assists, season) VALUES ('$first_name', '$last_name', '$goals', '$assists', '$season')";
if(mysqli_query($link, $sql)){
    echo '<script>window.location.href = "playerlist.php";</script>';
} else{
    echo "Unable to add player to Database. $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>