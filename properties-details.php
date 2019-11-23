<?php 
header('Cache-Control: no cache'); //disable validation of form by the browser
// include'include/config.php';
// include('database_connection.php');
extract($_REQUEST);
include'include/propertiesheader.php'; $id=$_REQUEST['p_id'];

?>

<!-- main header start -->
<head>
    <!-- <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
     <!-- <link type="text/css" rel="stylesheet" href="assets/css/bootstrap1.min.css"> -->
    <?php 

       // $query=mysqli_query($con,"select * from property where p_id='$id'");

     $query=mysqli_query($con,"
      SELECT * FROM property as p JOIN advertiser as a USING (adv_id) where p.p_id = '$id'");

    $res=mysqli_fetch_array($query);

    

    $id=$res['p_id'];
   
    $img=$res['image'];

    $bedroom=$res['bedroom'];
    
    $bathroom=$res['bathroom'];
    $kichan=$res['kichan'];
    $sqr_price=$res['sqr_price'];
    $kithan=$res['kichan'];
    $description=$res['description'];
    $title=$res['title'];
    $price=$res['price'];
    $address=$res['address'];
    $furnish=$res['furnish'];
    $property_owner=$res['property_owner'];
    $property_type=$res['property_type'];
    $lot_size=$res['lot_size'];
    $land_area=$res['land_area'];
    $sold=$res['sold'];
    $address=$res['address'];
    $email=$res['email'];

    $phoneno=$res['contactno'];
    




    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>



<!-- Properties details page start -->
<div class="properties-details-page content-area-15">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 slider">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <div class="heading-properties">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3><?php echo $title;?></h3>
                                    <p><i class="fa fa-map-marker"></i> <?php echo $address;?></p>
                                </div>
                                <div class="p-r">
                                    <h3>RM<?php echo $price;?>/month</h3>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">


                        <?php

$query=mysqli_query($con,"select * from images where p_id='$id'");
$res=mysqli_fetch_array($query);
                    
$img1=$res['image1'];
$img2=$res['image2'];
$img3=$res['image3'];
$img4=$res['image4'];
                        ?>


                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="advertiser/images/property_image/<?php echo $img;?>" class="img-fluid" alt="property-4">
                        </div>
                         <div class="item carousel-item" data-slide-number="1"> 
                            <img src="advertiser/images/property_image/<?php echo $img1;?>" class="img-fluid" alt="property-6">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="advertiser/images/property_image/<?php echo $img2;?>" class="img-fluid" alt="property-1">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="advertiser/images/property_image/<?php echo $img3;?>" class="img-fluid" alt="property-5">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="advertiser/images/property_image/<?php echo $img4;?>" class="img-fluid" alt="property-8">
                        </div> 

                        <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="advertiser/images/property_image/<?php echo $img;?>" class="img-fluid" alt="property-4">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                <img src="advertiser/images/property_image/<?php echo $img1;?>" class="img-fluid" alt="property-6">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                <img src="advertiser/images/property_image/<?php echo $img2;?>" class="img-fluid" alt="property-1">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                <img src="advertiser/images/property_image/<?php echo $img3;?>" class="img-fluid" alt="property-5">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                <img src="advertiser/images/property_image/<?php echo $img4;?>" class="img-fluid" alt="property-8">
                            </a>
                        </li>
                    </ul>
                </div>
              
                <!-- Tabbing box start -->
                <div class="tabbing tabbing-box mb-60">
                    <ul class="nav nav-tabs" id="carTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Details</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Related Properties</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" id="7-tab" data-toggle="tab" href="#7" role="tab" aria-controls="7" aria-selected="true">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="carTabContent">
                        <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h3 class="heading">Property Description</h3>
                           <p><?php echo $description;?></p>
                        </div>
                      
                        <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="amenities-box mb-60">
                                <h3 class="heading">Property Details</h3>
                         <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Property Id:</strong> <?php echo $id;?>
                                            </li>
                                            <li>
                                                <strong>Price: RM</strong> <?php echo $price;?>/month
                                            </li>
                                            <li>
                                                <strong>Property Type:</strong> <?php echo $property_type;?>
                                            </li>
                                            <li>
                                                <strong>Bathrooms:</strong> <?php echo $bathroom;?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Property Lot Size:</strong> <?php echo $lot_size;?>
                                            </li>
                                            <li>
                                                <strong>Land area:</strong> <?php echo $land_area;?>
                                            </li>
                                            
                                             <li>
                                                <strong>Property Owner:</strong> <?php echo $property_owner;?>
                                            </li>
                                            <li>
                                                <strong>Bedroom:</strong> <?php echo $bedroom;?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Availble:</strong> <?php echo $sold;?>
                                            </li>
                                            <li>
                                                <strong>Address:</strong> <?php echo $address;?>
                                            </li>
                                            
                                          
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                            <div class="property-video">
                                <h3 class="heading">Property Video</h3>
                                <iframe src="<?php echo $video;?>"></iframe>
                            </div>
                        </div>
                         <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                          
                                <h3 class="heading">Location</h3>
                                <!-- <a href="house-map.php" class="w3-button w3-black">View Map</a> -->
                                <div class="w3-container">

                                    <!-- First method to sent id -->
                                    
                                    <!-- Second mehtod to sent id -->
                                         <?php echo "<a href = 'house-map.php?p_id=$id' class='w3-button w3-yellow w3-border'> View Map </a>"; ?>
                                </div>
                           
                        </div>
                        
                        <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                            <div class="related-properties">
                                <h3 class="heading">Related Properties</h3>
              <div class="row">
        <?php 
        include'config.php';
        $query1=mysqli_query($con,"select * from student");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['fname']);

$query=mysqli_query($con,"select * from property ORDER BY RAND() LIMIT 2");
while($res=mysqli_fetch_array($query))
{
$id=$res['p_id'];
$img=$res['image'];

        ?>    
            <div class="col-md-6">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    RM <?php echo $res['price'];?>/month
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="advertiser/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid" width="250" height="250">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="advertiser/images/property_image/<?php echo $img;?>" class="overlay-link">
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
                                <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : Kitchen
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> <?php echo $res['property_owner'];?>
                        </a>
                        <span>
                                <i class="fa fa-calendar-o"></i> Available : <?php echo $res['sold'];?>
                            </span>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
                 </div>
                        </div>

         <div class="tab-pane fade " id="7" role="tabpanel" aria-labelledby="7-tab">
              <div class="property-contact">
                 <h3 class="heading">Contact via </h3>

                  <a href="<?php  $num=$phoneno;
                    $link="http://wa.me/6".$num;
                    echo $link; ?>" target="_blank">WhatsApp</a>

                    

                     <!-- <h3 class="heading">Or email </h3> -->

                      <div><?php include'contact2.php';?></div>
              </div>
         </div>
                  
                    </div>
                </div>
                <!-- Amenities box start -->
                <div class="amenities-box mb-60">
                    <h3 class="heading">Condition</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-bed"></i>  <?php echo $bedroom;?> Beds</span></li>
                                <li><span><i class="flaticon-bath"></i> <?php echo $bathroom;?> Bathroom</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <!-- <li><span><i class="flaticon-car-repair"></i> 1 Garage</span></li> -->
                                <li><span><i class="flaticon-balcony-and-door"></i><?php echo $furnish;?> Furnish</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> <?php echo $sqr_price;?> sq ft</span></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>

                    <ul class="contact-info">
                        <li>
                            Address: Taman Enyum Setia
                        </li>
                        <li>
                            Email: <a href="azwarnaim97@gmail.com">azwarnaim97@gmail.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+0103800247">+0103800247</a>
                        </li>
                      
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Service</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                       
                      
                    </ul>
                </div>
            </div>
            
            <!--<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  2019 <a href="http://themevessel.com/" target="_blank">RenHof</a>. One of the best finder system for non-resident student.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
  <!--  <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/property-1.jpg" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/property-1.jpg" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about-1.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-1.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.selectBox.js"></script>
<script src="assets/js/rangeslider.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/leaflet-providers.js"></script>
<script src="assets/js/leaflet.markercluster.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/maps.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/themevessel-xero/properties-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 08:43:44 GMT -->
</html>