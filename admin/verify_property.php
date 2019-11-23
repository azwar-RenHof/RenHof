<?php 

include'../config.php';

$id=$_GET['y'];

 $query=mysqli_query($con,$query="update property set status=1 where p_id='$id'");

header("Refresh:0; url=verifyhouse.php");
	

?>