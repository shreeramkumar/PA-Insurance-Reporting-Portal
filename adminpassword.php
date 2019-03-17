<html>
<head>
<title>admin</title>
<style>

h2{
background-color: blue;
padding: 20px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}
hr{
margin: -10px -50px;
border: 0;
border-top: 1px green #ccc;
margin-bottom: 40px;
}
div.container{
width: 900px;
height: 610px;
margin:35px auto;
font-family: 'Raleway', sans-serif;
}
div.main{
width: 300px;
padding: 10px 50px 25px;
border: 2px solid gray;
border-radius: 10px;
font-family: raleway;
float:left;
margin-top:20px;
}
input[type=text],input[type=password]{
width: 100%;
height: 40px;
padding: 10px;
margin-bottom: 25px;
margin-top: 5px;
border: 2px solid #ccc;
color: #4f4f4f;
font-size: 20px;
border-radius: 5px;
}
label{
color: #464646;
text-shadow: 0 1px 0 #fff;
font-size: 14px;
font-weight: bold;
}
center{
font-size:32px;
}
.note{
color:red;
}
.valid{
color:green;
}
.back{
text-decoration: none;
border: 1px solid rgb(0, 143, 255);
background-color: rgb(0, 214, 255);
padding: 3px 20px;
border-radius: 2px;
color: black;
}
input[type=button]{
font-size: 16px;
background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
border: 1px solid #e5a900;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width: 100%;
border-radius: 5px;
padding: 10px 0;
outline:none;
}
input[type=button]:hover{
background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
}
</style>
</head>

<body background="img/EmployeeDevelopment.jpg" height="200px" width="300px">

<div class="container">
<div class="main">
	<div align = "center">
<h1>MANAGER LOGIN</h1>
<font size="10px">
<form id="form_id" method="post" name="myform">
<label>User Name </label>
<input type="text" name="username" id="username"/>
<label>Password </label>
<input type="password" name="password" id="password"/>
<input type="button" value="Login" id="submit" onclick="validate()"/>
</font>
</form>
<span><b class="note"><b class="valid"></b></span>

</div>
</div>
<script>
var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "manager" && password == "manager"){
alert ("Login successfully");
window.location = "managerdetails.php"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
</script>
</body>
</html>