<html>
<head>
<title>Login form design </title>    
    <link rel="stylesheet" type="text/css" href="style.css">
 <body>
    <div class="loginbox">
    
        <h1>Login Here</h1>
        <form action="" method="POST">
        username:<br>
        <input type="text"  placeholder="Enter Username" name="username" /><br>
        Password :<br>  
        <input type="password"  placeholder="Enter Password" name="password" minlength="8" required /><br>
		<center>
		<!--<p>
		<input type="submit" value="Login" name="submit"/> 
		</p>-->
		
      <!-- <a href="desin.php"></a></br>-->
	   
	   <button type="submit">login</button>
		</center>
            <a href="#">Forgot your password?</a><br>
            <a href="registerform.html">Create an account?</a>
        
    </div>
		 
</body>
<?php
         $hostname = "localhost";
         $username = "root";
         $password = "";
         $database = "repform";
         $con = new mysqli($hostname,$username,$password,$database);
         
         if(! $con) {
         die('Could not connect: ' . mysqli_error());
         }
         
         if(isset($_POST['submit'])){
         
          
          
         $username=$_POST['username']; 
         $password=$_POST['password'];
         $sql = "SELECT username,password FROM client  WHERE username='".$username."' AND password='".$password."' ";
         $result = mysqli_query($con, $sql);
         
        
         
         if (mysqli_num_rows($result) > 0) { 
         echo "Login successful";
         header('Location: desin.html');
         } else{
         echo "Invalid username and Password";
         }
         }
         
         
         ?>
</head>
</html>