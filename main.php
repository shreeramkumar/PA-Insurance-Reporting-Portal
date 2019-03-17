<?php
include('config.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$retypepassword=$_POST['retypepassword'];
$query=mysqli_query($con,"INSERT INTO `client`(`username`,`emailid`, `password`,`retypepassword`)
VALUES ('".$username."','".$emailid."','".$password."','".$retypepassword."')");
if($query)
{
echo '<script>window.location="main.php";</script>';
}
else
{
  die ("Connection error:".mysqli_connect_error());
}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background:url(sample.jpg)
 
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 15px 0;
  display: inline-block;
  border: none;
  
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body >
<form  method="post" action="" >
<center>
<table>
<font color="black">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    
<label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" ><br>
    <label for="emailid"><b>emailid</b></label>
    <input type="text" placeholder="Enter Email" name="emailid" ><br>

    <label for="password"><b>password</b></label>
    <input type="Password" placeholder="Enter Password" name="password" ><br>

    
	    <label for="psw-repeat"><b>retypepassword</b></label>
    <input type="password" placeholder="Repeat Password" name="retypepassword" ><br>
    
    

    <input type="submit" class="registerbtn" name="submit" >
  </div>
  
  
    <p>Already have an account? <a href="loginform.php">Sign in</a></p>
  </font>
  </table>
  </center>
</form>

</body>
</html>
