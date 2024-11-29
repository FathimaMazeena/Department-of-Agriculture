
<?php

$serverName="localhost";
$username="root";
$password="";
$databaseName="department_of_agriculture";

$conn=mysqli_connect($serverName,$username,$password,$databaseName);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
} 