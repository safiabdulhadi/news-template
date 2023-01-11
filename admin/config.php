<?php
// create url connection
$hostname = "http://localhost/news-site";
// Connection Variables
$host = "localhost";
$user = "root";
$password = "Safi1994?";
$db_name = "news-site";

// create database connection
$conn = mysqli_connect($host,$user, $password, $db_name) OR die ("Connection failed:" . mysqli_connect_error());





?>