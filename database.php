<?php

$host = "127.0.01";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname : $host,
username: $username,
password: $password,
database: $dbname);

if($mysqli->connect_errno){
    die("Connection error: "  .  $mysqli ->connect_error);
}


return  $mysqli;
