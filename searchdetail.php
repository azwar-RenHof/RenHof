<?php
session_start();
include("checklogin.php");
check_login();

	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>




      <!-- Search database start -->

      

      <!-- Search database end -->


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav><br><br><br>

    <!-- Search session -->
    <div> 
     <center><h4 style="">FIND RENTAL HOUSE!!!</h4></center>
        <!-- Search form 
        <div class="active-pink-3 active-pink-4 mb-4">
                <center><input class="form-control" type="text" placeholder="Search your place" aria-label="Search" style="height: 50px;width: 600px"> <button type="button" form="nameform" value="Seacrh" style="height: 50px;width: 100px">Search</button>
                </center>
        </div> 
        -->

        <div class="active-pink-3 active-pink-4 mb-4">
           

            <?php include'search.php';?>

        </div>

    </div>


    <!-- <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p>
        </header>

        <hr>
         <div class="well hero-spacer">This is by KG! Do like and Subscribe my Channel</div>

      


        </div> -->

     


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>

    function initMap() {
         var input = document.getElementById('searchMapInput');
  
         var autocomplete = new google.maps.places.Autocomplete(input);
   
         autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
       var p = place.formatted_address;
        var y = place.geometry.location.lat();
       var z = place.geometry.location.lng();

       alert("Location= "+p+"____Lat= "+y+"____Long= "+z); 


        $("#location").val(p);
          $("#lat").val(y);
          $("#lng").val(z);
          
    });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbpa08Ewq2NjT2nr9bRyBj5ncvPcL9CBk&libraries=places&callback=initMap" async defer></script>
</body>

</html>
