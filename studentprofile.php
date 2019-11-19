<!DOCTYPE html>
<html>
<head>

	<?php include'include/propertiesheader.php';

	include'include/config.php';

	$id= $_SESSION['id'];
	$query=mysqli_query($con,"select * from student where id='$id'");
	$res=mysqli_fetch_array($query);




if(isset($_POST['update']))
{

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];

	// echo $contact;

	$query=mysqli_query($con,"UPDATE student SET fname='$fname', lname='$lname', email='$email', password='$password', contact='$contact' where id='$id'");
	

	mysqli_query($con,$query) ;

	// $res = mysql_query($query) or die("Could not update".mysql_error()); 
	
	header("Refresh:0; url=studentprofile.php");


}?>


	<title>Profile</title>

	<!-- Link bootstrap for form -->
	<!-- <link type="text/css" rel="stylesheet" href="css/bootstrapform.min.css"> -->
	<!-- <link type="text/css" rel="stylesheet" href="css/bootstrapform.css"> -->
</head>
<body>

<h1>Your Profile</h1>

<form class="" method="post" action="studentprofile.php">

	<div class="">
		First name : <input required type="text" name="fname" value="<?php echo $res['fname'];?>" ><br>
	</div>
	
	Last name : <input required type="text" name="lname" value="<?php echo $res['lname'];?>" ><br>
	Email : <input required type="text" name="email" value="<?php echo $res['email'];?>" ><br>
	Password : <input required type="text" name="password" value="<?php echo $res['password'];?>" ><br>
	Contact : <input required type="text" name="contact" value="<?php echo $res['contact'];?>" ><br>
	
	<input type="submit" name="update" value="update">
</form>


</body>
</html>