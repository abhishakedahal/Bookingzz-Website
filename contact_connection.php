<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webtech_project_contact";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($con===false) {

    die("failed to connect to database!".mysqli_connect_error());
}