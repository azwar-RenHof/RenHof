<?php 

include'../config.php';

$sid=$_GET['x'];


$query1=mysqli_query($con,"select * from property where p_id='$sid'");
$image=mysqli_fetch_array($query1);
$img=$image['image'];
unlink("images/property_image/$img");


$query2=mysqli_query($con,"select * from images where id='$sid'");
$image1=mysqli_fetch_array($query2);

$img1=$image1['image1'];
$img2=$image1['image2'];
$img3=$image1['image3'];
$img4=$image1['image4'];

unlink("images/property_image/$img1");
unlink("images/property_image/$img2");
unlink("images/property_image/$img3");
unlink("images/property_image/$img4");

mysqli_query($con,"delete from property where p_id='$sid'");
mysqli_query($con,"delete from images where id='$sid'");
echo"<script>window.location.href='view_property.php';</script>";		
	

?>