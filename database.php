<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "samplelogin";

//create connection
$conn = new mysqli($servername, $username, $password, $database);

if($coon -> connect_error){
    die("Connection failed" .$coon -> connect_error);
}

?>
