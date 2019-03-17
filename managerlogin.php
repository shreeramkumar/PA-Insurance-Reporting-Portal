<!DOCTYPE html>
<html>
<head>
  <title>Employee Login</title>
</head>
<font color="red"><center><h1>MANAGER LOGIN</h1></font>
<body bgcolor="#E6E6FA">
  <div align="center">
  <form method="post" action="">
  <label>Username</label>
  <input type="text" name="username"><br><br>
  <label>Password</label>
  <input type="password" name="password"><br><br>
  <input type="submit" name="submit">
</form>
</div>
</body>
</center>
</form>
</div>
</body>
</center>
</font>
</html>


<?php
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $database = "regform";
   $con = new mysqli($hostname,$username,$password,$database);
   //mysql_select_db($database ,$con);
   if(! $con) {
   die('Could not connect: ' . mysqli_error());
   }
   //echo 'Connected successfully<br>';
   if(isset($_POST['submit'])){
   // Define $username and $password 
     session_start(); 
    
   $name=$_POST['username']; 
   $pass=$_POST['password'];
   $sql = "SELECT username,password,id,role FROM newregister WHERE username='".$name."' AND password='".$pass."' ";
   $result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {


        $check_username = $row['username'];
        $check_password = $row['password'];
        $check_id = $row['id'];
               $check_role = $row['role'];

    }
    /*********************/
   session_regenerate_id();
     
    $_SESSION['sess_userid']=$check_id;
    $_SESSION['sess_username']=$check_username;
    $_SESSION['sess_userrole']=$check_role;
/*********/

if( $_SESSION['sess_userrole'] == "manager"){
      header('Location: managerview.php');
    }else if( $_SESSION['sess_userrole'] == "employee"){
      header('Location: ../employee/employeedetails.php');
    }else if( $_SESSION['sess_userrole'] == "admin"){
      header('Location: ../admin/form1.php');
    }else{
      header('Location: ../index.php');
    }
}

?>
   

 