<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST["name"];
$pass=$_POST["pass"];
$sql="SELECT * FROM user where user='$user' and password='$pass'";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  if($rowcount==1)
  {
	  $_SESSION["user"] = $user;
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
        .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #5cb85c;
  width: 70px;
  height: 70px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


    </style>
</head>

<body>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>You have successfully logged in.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        <div class="row">
        <div class="loader"></div><div><br><p>&nbsp;&nbsp;&nbsp;You will be redirected in few seconds</p>
        </div>
    </div>
</body>

</html>'

       

       
 ;
	  header( "refresh:2;url=home.php" );
  }
  else 
  {
	  echo 'Either username or password is incorrect';
  }
  }

mysqli_close($conn);
?>
