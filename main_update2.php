<?php
include('config1.php');
if(isset($_POST["submit"]))
{
$I_am_reporting_a=$_POST['I_am_reporting_a'];
$Reporter_Firstname=$_POST['Reporter_Firstname'];
$Reporter_Lastname=$_POST['Reporter_Lastname'];
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];


$Incident_Date=$_POST['Incident_Date'];
$Incident_time=$_POST['Incident_time'];

$Location_of_incident=$_POST['Location_of_incident'];
$Please_describe_the_event_in_detail=$_POST['Please_describe_the_event_in_detail'];

$Was_damage_done_to_the_property=$_POST['Was_damage_done_to_the_property'];
$Could_this_incident_been_avioded=$_POST['Could_this_incident_been_avioded'];
$Please_explain=$_POST['Please_explain'];
$I_certify_that_the_information_is_true=$_POST['I_certify_that_the_information_is_true'];
$query=mysqli_query($con,"INSERT INTO `info`(`I_am_reporting_a`, `Reporter_Firstname`,`Reporter_Lastname`,`Firstname`,`Lastname`,`Incident_Date`,`Incident_time`,`Location_of_incident`,`Please_describe_the_event_in_detail`,`Was_damage_done_to_the_property`,`Could_this_incident_been_avioded`,`Please_explain`,`I_certify_that_the_information_is_true`)
VALUES ('".$I_am_reporting_a."','".$Reporter_Firstname."','".$Reporter_Lastname."','".$Firsname."','".$Lastname."','".$Incident_Date."','".$Incident_time."','".$Location_of_incident."','".$Please_describe_the_event_in_detail."','".$Was_damage_done_to_the_property."','".$Could_this_incident_been_avioded."','".$Please_explain."','".$I_certify_that_the_information_is_true."')");
if($query)
{
echo '<script>window.location="main_select2.php";</script>';
}
else
{
  die ("Connection error:".mysqli_connect_error());
}
}
?>
<html>
<head>
<h1 style="font-size:300%;">PERSONAL ACCIDENT INSURANCE REPORTING PORTAL</h1>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<style> 
        body{
        }
            h1 {
    color: green;
    font-family: ;
    font-size: 100%;

}

        <font color:white></font>
</style>
<center>
<h3 style="color:darkmagenta;">I_am_reporting_a</h3>
<form action="" method="POST">
<input type="radio" name="I_am_reporting_a" value="I_am_reporting_a"> loss due to injury<br>
<input type="radio" name="I_am_reporting_a" value="I_am_reporting_a" > first aid incident<br>
<input type="radio" name="I_am_reporting_a" value="I_am_reporting_a"> Partial disablement<br>
<input type="radio" name="I_am_reporting_a" value="I_am_reporting_a"> Total disablement<br>
<h3 style="color:darkmagenta;">person_reporting_a_incident</h3>
<font color:white>
Reporter_Firstname
<font color='white'>
 <input type="text" name="Reporter_Firstname" placeholder="Enter Firstname">
 </font>
Reporter_Lastname
 <input type="text" name="Reporter_Lastname" placeholder="Enter Lastname">
<h3 style="color:darkmagenta;">person_involved_in_incident</h3>
Firstname
 <input type="text" name="Firstname" placeholder="Enter Firstname">
Lastname
 <input type="text" name="Lastname" placeholder="Enter Lastname">

<h3 style="color:darkmagenta;">Incident_Date</h3>
<label>Date <input type="date" name="Incident_Date" </label>
<!--<input type="month" min="2013-01" max="2015-12"/><br><br>-->
<h3 style="color:darkmagenta;">Incident_time</h3>
<label>Time <input type="time" name="Incident_time" </label>
<!--Time: <input type="time" id="myTime" value="">
<p id="demo"></p>-->

<script>
function myFunction() {
    var x = document.getElementById("myTime").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

<h3 style="color:darkmagenta;">Location_of_incident</h3>
<input type="text" name="Location_of_incident" placeholder="none">
<h3 style="color:darkmagenta;">Please_describe_the_event_in_detail</h3>
<input type="text" name="Please_describe_the_event_in_detail" placeholder="Description" height="150"><br>
<form action="">
<h3 style="color:darkmagenta;">Was_damage_done_to_the_property</h3><br>
<input type="radio" name="Was damage done to the property" value="yes"> yes<br>
  <input type="radio" name="Was damage done to the property" value="no"> no<br>
<h3 style="color:darkmagenta;">Could_this_incident_been_avioded</h3><br>

  <input type="radio" name="Could this incident been avioded" value="yes"> Yes<br>
  <input type="radio" name="Could this incident been avioded" value="No"> No<br>
 
</form>



<h3 style="color:darkmagenta;">Please_explain</h3><br>
<input type="text" name="Please_explain" placeholder="none" <br>
<h3 style="color:darkmagenta;">I_certify_that_the_information_is_true</h3><br>
<input type="text" name="I_certify_that_the_information_is_true" > <br><br>
<!--<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>-->

<input type="submit" value="Submit" style="background-color:green;height:20px;width:60px">
</center>
</form>
</body>
</html>
