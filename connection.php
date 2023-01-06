<?php
$serevrname="localhost";
$username="hotelbooking";
$password="Bx/wH9qY}yS\Ok/u";
$db="hotel";

$conn=mysqli_connect($serevrname, $username, $password, $db);

if(!$conn){
    die("Connection failed");
}

echo "Connected";
?>