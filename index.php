<?php

ini_set('max_execution_time', -1);

$servername = "localhost";
$username = "bhawana";
$password = "123456";
$dbname = "datas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();
// Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';

mysqli_close($conn);
?>