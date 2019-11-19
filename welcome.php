<?php
header('Cache-Control: no cache'); //disable validation of form by the browser

?><!DOCTYPE html>
<html lang="en">

<head>

    <title>Welcome</title>

</head>

<body>
    
    <?php include'include/propertiesheader.php';?>
 

    <!-- Search session -->
    <div> 
     <center><h1 style="">FIND RENTAL HOUSE!!!</h1></center>

       <div class="active-pink-3 active-pink-4 mb-4">

             
            <?php include'search3.php';?>

        </div>
    </div>
    
   
    <script>

    function initMap() {
         var input = document.getElementById('searchMapInput');
  
         var autocomplete = new google.maps.places.Autocomplete(input);
   
         autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
       var p = place.formatted_address;
        var y = place.geometry.location.lat();
       var z = place.geometry.location.lng();

       // alert("Location= "+p+"____Lat= "+y+"____Long= "+z); 


        // $("#location").val(p);
          // $("#lat").val(y);
          // $("#lng").val(z);
          
    });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbpa08Ewq2NjT2nr9bRyBj5ncvPcL9CBk&libraries=places&callback=initMap" async defer></script>
</body>

</html>
