<?php

// session_start();
   
include('include/header.php');
extract($_REQUEST);
include'include/config.php';
  


?>  
    <!-- Header -->
    
    <section>
<header>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</header>      
       <!-- Left Sidebar -->


<?php include('include/sidebar.php');


if(isset($submit))
{

$advertiser= $_SESSION['adv_id'];





$file=$_FILES['file']['name'];
   // $price=$_POST['price'];
   // echo $price;
  $query="INSERT INTO property (p_id, title, email, bedroom, kichan, bathroom, furnish, price, sqr_price, address, image, description, property_owner, property_type, lot_size, sold, land_area,adv_id ,dates) VALUES ('', '$title', '$email', '$bedroom', '$kitchan', '$bathroom', '$furnish', '$price', '$sqr_price', '$add', '$file', '$description', '$property_owner', '$property_type','$lot_size', '$sold', '$land_area','$advertiser',now())";  
  $r=mysqli_query($con,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 
 

//Condition to check data successful to add or not.
if($r)
{
  $msg='<div class="alert alert-success alert-dismissible">
   
    <strong>Success! Property Data Add successful. Then you need to add house location on map</strong>

  </div>
  <div>

    <center><a href="user-map.php" class="w3-btn w3-green"><b>Click Me<b></a>to add location</center
  </div><br>';    
}
else
{
$msg='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Fail!</strong> Property Data Add Not successful.
  </div>';

}
        
}?>
        <!-- #END# Left Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Add Property
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="title" class="form-control">
                                                <label class="form-label">Property Title</label>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="text" name="email" class="form-control">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="text" name="property_owner" class="form-control">
                                                <label class="form-label">Property Owner</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="text" name="property_type" class="form-control">
                                                <label class="form-label">Property Type</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="text" name="lot_size" class="form-control">
                                                <label class="form-label">Property Lot Size</label>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                 <label style="color:gray;">Available</label>
                                               
                                               <input name="sold" type="radio" id="radio_36" value="yes" class="with-gap radio-col-light-blue" checked />
                                                <label for="radio_36">YES</label>

                                                <input name="sold" type="radio" id="radio_30" value="No" class="with-gap radio-col-red"  />
                                                <label for="radio_30">NO</label>
                                            </div>
                                        </div>
                                     </div>

                                     

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="text" name="land_area" class="form-control">
                                                <label class="form-label">Land area</label>
                                            </div>
                                        </div>
                                     </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="number" name="price" class="form-control">
                                                <label class="form-label">Price</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="number" name="sqr_price" class="form-control">
                                                <label class="form-label">Sqr Fit Price</label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="add" class="form-control">
                                                <label class="form-label">Address</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea  name="description" class="form-control"></textarea>
                                                <label class="form-label">Description</label>
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                
                                <div class="custom-file">
                                    <label class="form-label">Add Property Image</label>
                                    <input  name="file"  type="file" multiple />
                                    
                                </div>
                           
                                            
                               </div>

                                <div class="header col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                                 
                               <h4 style="text-align: center;">Condition</h4>
                                                                                     
                                </div>



                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="number" name="kitchan" class="form-control">
                                                <label class="form-label">Kitchen</label>
                                            </div>
                                        </div>
                                    </div>


                                   


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="number" name="bedroom" class="form-control">
                                                <label class="form-label">Bedroom</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input  type="number" name="bathroom" class="form-control">
                                                <label class="form-label">Bathroom</label>
                                            </div>
                                        </div>
                                    </div>


                                  <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                 <label style="color:gray;">Furnish</label>
                                               
                                               <input name="furnish" type="radio" id="radio_35" value="Semi" class="with-gap radio-col-light-yellow"  />
                                                <label for="radio_35">Semi</label>

                                                <input name="furnish" type="radio" id="radio_31" value="Fully" class="with-gap radio-col-green"  />
                                                <label for="radio_31">Fully</label>
                                            </div>
                                        </div>
                                     </div>
                                    

                                   

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                             
                                  <div class="container">
                                          
                                <div class="header col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                                 
                                        <br><input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

            <?php include'include/footer.php';?>

?>