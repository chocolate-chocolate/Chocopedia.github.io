<?php

session_start();

ini_set('max_execution_time', -1);

$servername = "localhost";
$username = "bhawana";
$password = "123456";
$dbname = "datas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
	header("Location: home.php?success=1");
}

else {
	echo "Error: ". $sql . mysqli_error($conn);
}

?>