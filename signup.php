<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$one = $_POST["fname"];
	$two = $_POST["lname"];
$three = $_POST["email"];
$four = $_POST["postal"];
$five = $_POST["pass"];
$sql="insert into user1 values('$one','$two','$three','$four','$five')";
$result=$conn->query($sql);
$sql1="insert into user values('$one','$five')";
$result1=$conn->query($sql1);

	session_start();
	$_SESSION["logged_in"] = "1";
    echo '<h1>sucessfully connected</h1>';
	header("Location: home.php");

?>
