<?php
$serverName = "localhost";
$dbusername ="root";
$dbPassword ="";
$dbname="hospitaldb";

$conn= mysqli_connect($serverName,$dbusername,$dbPassword,$dbname);

if (!$conn) {
	die("Connection Failed: " .mysqli_connect_error());
}