<?php
session_start();
if( !isset($_SESSION["user"]) ){
	echo 'Login first';
}
else
{
echo'
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Pet-Finder</title>
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

        .card-body {
            border-radius: 25px;
        }
        .okay{
            
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="images/logo1.png" alt="logo" /><h3>Pet-FINDER</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sell.html">Adopt pet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buy.php">Find/Found pet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Manage Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><a href="index.html" style="color:white"s>Logout</a></button>
            </form>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="main">
        <div class="page">
            <div class="page-in">
                <div class="header">
                    <div class="topmenu">



                    </div>
                    <!--<img src="images/3.jpg" alt="Book1" width="995" height="378">-->
                </div>

                <div class="mid">
                    <div class="mid-left">
                        <div class="gap-1">
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">WELCOME TO Pet-FINDER</h5>
                                                <p class="card-text">Petfinder is an online, searchable database of animals who need homes. It is also a directory of nearly 11,000 animal shelters and adoption organizations. From the comfort of their personal computers, pet lovers can search for a pet that best matches their needs. They can then reference a shelter’s web page and discover what services it offers. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">ABOUT US</h5>
                                                <p class="card-text">Petfinder.com is a searchable list of pets from thousands of shelters and foster groups. Begin your search using our Pet Search (at the top of this page). Since Petfinder is updated on a daily basis, we recommend you keep checking back or save your query so we’ll send you an automatic e-mail when new pets are added that match your search (after you search for a pet, click on “Save This Query” at the bottom of the page). You can also search by using our Breed List. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="okay">
                                <img src="images/binoleft.png">
                                
                                <h5 class="card-title">Find the Right Pet</h5>
                                <p class="card-text">Get tips on figuring out who you should adopt.</p>
                                <a href="http://localhost/hci/sell.html" class="btn btn-dark">GET</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                               <div class="okay">
                                <img src="images/binoright.png">
                                
                                <h5 class="card-title">Pet Adoption FAQs</h5>
                                <p class="card-text">Get answers to questions you havent thought of.</p>
                                <a href="https://www.petfinder.com/pet-adoption/pet-adoption-information/pet-adoption-faqs/" class="btn btn-dark">FIND</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">&copy;Designed for HCI project</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


                </nav>



            </div>

        </div>
    </div>
</body>

</html>

';
}
?>
