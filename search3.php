
<!DOCTYPE html>

<html>

    <head>

        <title> Search house </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
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

       // alert("Location= "+p+"____Lat= "+y+"____Long= "+z); 


        // $("#location").val(p);
          // $("#lat").val(y);
          // $("#lng").val(z);
          
    });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbpa08Ewq2NjT2nr9bRyBj5ncvPcL9CBk&libraries=places&callback=initMap" async defer></script>
    

    <!-- Form section to find the criteria  -->
    <form action="welcome.php" method="post">
       
        <?php  include'config.php';

        $query = "SELECT DISTINCT bedroom FROM property ORDER BY bedroom ASC"; 
        $data = mysqli_query($link, $query) or die(mysqli_error($link));

        ?>


         <div><center><input id="searchMapInput" name="address" class="mapControls" type="text" value="" placeholder="Enter a location" style="height: 50px;width: 600px"> </div>
         </center>
         <div>



        <center> <select name="price1">
             <option value="0">Min Price</option>
             <option  value="0">0</option>
             <option  value="500">500</option>
             <option  value="700">700</option>
             <option  value="800">800</option>
             <option  value="900">900</option>
             <option  value="1000">1000</option>
         </select>

         <select name="price2"> 
             <option value="9999999">Max Price</option>
             <option  value="0">0</option>
             <option  value="500">500</option>
             <option  value="700">700</option>
             <option  value="800">800</option>
             <option  value="900">900</option>
             <option  value="1000">1000</option>
         </select> 

        <select name="bedroom">
            <option value="">Bed</option>
            <?php 
            if(mysqli_num_rows($data)>0)
                while($row = mysqli_fetch_assoc($data))
                {
                    $bed = $row['bedroom'];
                    echo "<option value='$bed'>$bed</option>";
                }
             ?> 
         </select>

        <?php  

        $query2 = "SELECT DISTINCT bathroom FROM property ORDER BY bathroom ASC"; 
        $data2 = mysqli_query($link, $query2) or die(mysqli_error($link));

        ?>
         <select name="bathroom">
            <option value="">Bath</option>
            <?php 
            if(mysqli_num_rows($data2)>0)
                while($row = mysqli_fetch_assoc($data2))
                {
                    $bath = $row['bathroom'];
                    echo "<option value='$bath'>$bath</option>";
                }
                 ?>     
         </select>


         
         <select name="furnish">
             <option value="">Furnish</option>
             <option value="Fully">Fully Furnish</option>
             <option value="Semi">Semi Furnish</option>
         </select></center></div>

         <div><center><input type="submit" name="search" value="Find" style="height: 30px;width: 60px"></center></div>
    </form>



<div>
        <!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading">List of house</span>
                    </h4>
                </div> 
            </div>
        </div>
      


        <div class="row">


        <?php 

       if(isset($_POST['search']))
       { 
         $location=$_POST['address'];
         $minprice=$_POST['price1'];
         $maxprice=$_POST['price2'];
         $bed=$_POST['bedroom'];
         $bath=$_POST['bathroom'];
         $furnish=$_POST['furnish'];

         // $query=mysqli_query($link,"SELECT * FROM property WHERE (price  BETWEEN '$minprice' AND '$maxprice')");

          // $query=mysqli_query($link,"SELECT * FROM property WHERE (address LIKE '%$location%') AND (price  BETWEEN '$minprice' AND '$maxprice') AND (bedroom ='$bed') AND (bathroom = '$bath') AND (furnish = '$furnish') "); 

            $query = "SELECT * FROM property WHERE (address LIKE '%$location%') AND (price BETWEEN '$minprice' AND '$maxprice') AND (bedroom LIKE '%$bed%') AND (bathroom LIKE '%$bath%') AND (furnish LIKE '%$furnish%') AND status='1'";
            

            $data = mysqli_query($link, $query) or die(mysqli_error($link));
            
            if(mysqli_num_rows($data) > 0){
                // echo "hi";
                while ($res = mysqli_fetch_assoc($data)) {
                
                $id=$res['p_id'];
                $img=$res['image']; ?>

                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    RM <?php echo $res['price'];?> monthly
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="advertiser/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="advertiser/images/property_image/<?php echo $img;?>" class="overlay-link" width="250" height="250">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                     <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?p_id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> <?php echo $res['bathroom'];?> : Bathroom
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i><?php echo $res['furnish'];?> Furnish
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : kitchen
                            </li>
                        </ul>
                    </div>
                     <div class="footer">  
                        <a href="#">
                            <i class="fa fa-user"></i> <?php echo $res['property_owner'];?>
                        </a>
                        <span>
                               Available : <i ><?php echo $res['sold']?></i> 
                            </span>
                    </div> 
                </div>
            </div>

              <?php  } 
            }
            else{
                echo "Record not found!!!";
            } ?>



         

         

     <?php } ?>

        






    
      


<!-- Properties list fullwidth end
    </div>
</div>
</div>
</div>


    </body>
   
</html> 