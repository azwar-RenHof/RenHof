<?php 
include('include/header.php');
include'../config.php';
extract($_REQUEST);

$id=$_REQUEST['adv_id'];

$query=mysqli_query($con,"select * from advertiser where adv_id='$id'");
$res=mysqli_fetch_array($query);

$id=$res['adv_id'];



if(isset($_POST['submit']))
{
  $fname= $_POST['fname'];



  $query="UPDATE advertiser SET fname='$fname', lname='$lname', email='$email', password='$password', contact='$contact' WHERE adv_id='$id'";
  mysqli_query($con,$query); 

  $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Update successful. <?php echo $fname; ?> </div>';
    // echo"<script>window.location.href='advertiserprofile.php';</script>";
  
            
}
         ?>        

    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Update Your Profile
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
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
                            <form method="post" enctype="multipart/form-data">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="fname" value="<?php echo $res['fname'];?>" class="form-control">
                                                <label class="form-label">First name</label>
                                            </div>
                                        </div>
                                    </div>

                                      <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="lname" value="<?php echo $res['lname'];?>" class="form-control">
                                                <label class="form-label">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="email" value="<?php echo $res['email'];?>" class="form-control">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="password" value="<?php echo $res['password'];?>" class="form-control">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="password" value="<?php echo $res['contactno'];?>" class="form-control">
                                                <label class="form-label">Phone number</label>
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                        <center><input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update"></center> 
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