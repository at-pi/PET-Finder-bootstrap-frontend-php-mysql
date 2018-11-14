<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$one = $_POST["collar"];
	$two = $_POST["breed"];
$three = $_POST["size"];
$four = $_POST["gender"];
$five = $_POST["stray"];
$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));
$sql="insert into found values('$one','$two','$three','$four','$five','$imagetmp')";
$result=$conn->query($sql);

	$_SESSION["logged_in"] = "1";
    echo '<h1>sucessfully submitted</h1>';
	header("Location: home.php");

?>
