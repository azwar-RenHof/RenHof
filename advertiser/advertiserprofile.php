            <?php 
            session_start();
            include('include/header.php');?>
      
            <script type="text/javascript">

  

</script>
    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <!-- <a class="btn btn-info" href="add_property.php">Add Property</a> -->
                            <h2 style="text-align: center;">
                             Your Profile
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                             
                                            <th>My id</th>
                                            <th>My name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php
                                        $i=1;
include'include/config.php';

$advertiser= $_SESSION['adv_id'];
$query=mysqli_query($con,"select * from advertiser where adv_id='$advertiser'");
while($res=mysqli_fetch_array($query))
{
$id=$res['adv_id'];

?>

                                        <tr>
                                             
                                            <td><?php echo $res['adv_id'];?></td>
                                            <td><?php echo $res['fname'];?></td>
                                            <td><?php echo $res['email'];?></td>
                                            <td><?php echo $res['contactno'];?></td>
                                             <td>
    <a class='btn btn-info'   href="update_profile.php?&adv_id=<?php echo $id;?>"><span class="glyphicon glyphicon-pencil"></span></a>
  

   
    </td>
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <?php include'include/footer.php';?>


                                