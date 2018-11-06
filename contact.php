<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$one = $_POST["name"];
	$two = $_POST["email"];
$three = $_POST["subject"];
$four = $_POST["message"];
$sql="insert into contact values('$one','$two','$three','$four')";
$result=$conn->query($sql);
	session_start();
	$_SESSION["logged_in"] = "1";
    echo '<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        div.card1 {

            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .navbar-brand img {

            float: left;
            width: 50px;
            height: 50px;
        }


        .navbar-brand h1 {}

    </style>
</head>

<body>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Message Sucessfully submitted</p>
        <hr>
        <p class="mb-0">We will look into your query.</p>
    </div>
</body>

</html>

       

       
 ';
	  header( "refresh:5;url=home.php" );

?>
