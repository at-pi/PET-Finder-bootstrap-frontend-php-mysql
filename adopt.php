<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$upload_image=$_FILES[" myimage "][ "name" ];

$folder="/images/";

move_uploaded_file($_FILES[" myimage "][" tmp_name "], "$folder".$_FILES[" myimage "][" name "]);

$insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";

$var=mysql_query($inser_path);
?>