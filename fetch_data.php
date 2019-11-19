<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM property WHERE status = '1'
	";

	// sql for address

	

	// sql for price
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}

	// sql for bedroom
	if(isset($_POST["bedroom"]))
	{
		$bedroom_filter = implode("','", $_POST["bedroom"]);
		$query .= "
		 AND bedroom IN('".$bedroom_filter."')
		";
	}

	// sql for bathroom
	if(isset($_POST["bathroom"]))
	{
		$bathroom_filter = implode("','", $_POST["bathroom"]);
		$query .= "
		 AND bathroom IN('".$bathroom_filter."')
		";
	}

	// sql for furnish
	if(isset($_POST["furnish"]))
	{
		$furnish_filter = implode("','", $_POST["furnish"]);
		$query .= "
		 AND furnish IN('".$furnish_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '

			 <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    RM '. $row['price'] .' monthly
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="advertiser/images/property_image/'. $row['image'] .'" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id='. $row['image'] .'" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="advertiser/images/property_image/'. $row['image'] .'" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                     <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?id='. $row['id'] .'">'. $row['title'] .'</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i>'. $row['address'] .'
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> '. $row['bedroom'] .' : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> '. $row['bathroom'] .' : Bathroom
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>'. $row['furnish'] .' Furnish
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> '. $row['kichan'] .' : kitchen
                            </li>
                        </ul>
                    </div>
                     <div class="footer">  
                        <a href="#">
                            <i class="fa fa-user"></i> '. $row['property_owner'] .'
                        </a>
                        <span>
                               Available : <i >'. $row['sold'] .'</i> 
                            </span>
                    </div> 
                </div>
            </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>