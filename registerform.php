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
<form method="post" action="">
<center>
<table>
<font color="black">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" required><br>

    <label for="email"><b>Emailid</b></label>
    <input type="text" placeholder="Enter Email" name="emailid" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <label for="psw-repeat"><b>Retypepassword</b></label>
    <input type="password" placeholder="Repeat Password" name="retypepassword" required><br>
    
    

    <input type="submit" class="registerbtn" name="submit">
  </div>
  
  
    <p>Already have an account? <a href="loginform.html">Sign in</a></p>
  </font>
  </table>
  </center>
</form>

</body>
</html>

