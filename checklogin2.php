<?php
function check_login1()
{
if(strlen($_SESSION['login1'])==0)
	{	
		 $host=$_SERVER['HTTP_HOST'];
		 $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		 $extra="dashboard.php";		
		$_SESSION["login1"]="";
		$_SESSION["adv_id"]="";
		$_SESSION["fname"]="";
		 header("Location: http://$host$uri/$extra");
	}
}
?>