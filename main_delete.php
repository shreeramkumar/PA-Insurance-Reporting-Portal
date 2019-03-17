<?php
include('config.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysqli_query($con,"update client set status=0 where id='$id'");
	if($query)
	{
		 header("location:main_select.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
}
else
{
	$query=mysqli_query($con,"update client  set status=1 where id='$id'");
	if($query)
	{
		 header("location:main.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
	
}

?>