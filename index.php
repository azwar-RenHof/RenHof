
<?php include('include/header.php');?>
<!-- main header end -->
<?php
    include('config.php');
    if(isset($_POST['submit']))
    {
      
      $location=$_POST['location'];
      $lat=$_POST['lat'];
      $lng=$_POST['lng'];
      echo "_____________".$location."----";  
      
      $query="INSERT INTO location(location,place_Lat,place_Lng)
                VALUES('$location','$lat','$lng')";

      if(mysqli_query($link,$query))
      {
        echo "<div class='alert alert-success'>Place inserted in Database</div>";
      }else
      {
        echo "<div class='alert alert-success'>Data unsaved</div>";
      }

      
    } ?>

<body>

<!-- Banner start -->
<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="particles-banner"></div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-center">
                            <h2 data-animation="animated fadeInDown delay-05s">Best Place For Non-Resident Student</h2>
                            <div> 
   

            <div class="active-pink-3 active-pink-4 mb-4">
           
            </div>

      </div>
    </div>
    </div>
    </div>
    </div>

           <!-- <div class="carousel-item item-bg">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-right">
                            <h2 data-animation="animated fadeInDown delay-05s">Find Your Rental House Now!</h2>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-left">
                            <h2 data-animation="animated fadeInUp delay-05s">Best Place For Sell Properties</h2>
                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    

</div>
<!-- banner end -->








<!-- Recent Properties start -->

<!-- <div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="assets/img/property-3.jpg" alt="property-6" class="img-fluid">
                        <div class="date-box">For Sale</div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="assets/img/property-6.jpg" alt="property-6" class="img-fluid">
                        <div class="date-box">For Sale</div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Masons Villas</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="assets/img/property-2.jpg" alt="property-2" class="img-fluid">
                        <div class="date-box">For Sale</div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="assets/img/property-1.jpg" alt="property-6" class="img-fluid">
                        <div class="date-box">For Sale</div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Park avenue</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Recent Properties end -->


<!-- Testimonial 2 start <div class="testimonial-2 overview-bgi" style="background-image: url(assets/img/testimonial-property.jpg)">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>Testimonial</h1>
                    </header>
                    <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                        </p>
                                        <div class="author-name">
                                            Emma Connor
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar.jpg" alt="avatar" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                        </p>
                                        <div class="author-name">
                                            Martin Smith
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="assets/img/avatar/avatar-3.jpg" alt="avatar-3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                        </p>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                            <span class="slider-mover-left" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                            <span class="slider-mover-right" aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br/><br/><br/><br/> -->

<!-- Testimonial 2 end -->



<!-- partner start -->
<!--<div class="container partner">
    <div class="main-title">
        <h1>Partners</h1>
    </div>
    <div class="row">
        <div class="multi-carousel" data-items="1,3,5,6" data-slide="1" id="multiCarousel"  data-interval="1000">
            <div class="multi-carousel-inner">
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Audiojungle</p>
                        <img src="assets/img/brands/brand-1.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Codecanyon</p>
                        <img src="assets/img/brands/brand-2.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Graphicriver</p>
                        <img src="assets/img/brands/brand-3.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Themeforest</p>
                        <img src="assets/img/brands/brand-4.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Tuts</p>
                        <img src="assets/img/brands/brand-5.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Audiojungle</p>
                        <img src="assets/img/brands/brand-1.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Codecanyon</p>
                        <img src="assets/img/brands/brand-2.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Graphicriver</p>
                        <img src="assets/img/brands/brand-3.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Themeforest</p>
                        <img src="assets/img/brands/brand-4.png" alt="brand">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Tuts</p>
                        <img src="assets/img/brands/brand-5.png" alt="brand">
                    </div>
                </div>
            </div>
            <a class="multi-carousel-indicator leftLst" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="multi-carousel-indicator rightLst" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div> -->
<!-- partner end --> 

</body>
<!-- Footer start -->

<?php include('include/footer.php');?>