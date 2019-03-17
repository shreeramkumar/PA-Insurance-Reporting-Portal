<?php
include('config1.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysqli_query($con,"update info set status=1 where id='$id'");
	if($query)
	{
		 header("location:managerdetails.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
}
else
{
	$query=mysqli_query($con,"update info set status=1 where id='$id'");
	if($query)
	{
		 header("location:main2.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
	
}

?>