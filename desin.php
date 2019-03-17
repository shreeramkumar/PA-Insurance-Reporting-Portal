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
<form action="" method="get">
<input type="radio" name="I am reporting a:" value="Bike"> loss due to injury<br>
<input type="radio" name="I am reporting a:" value="Car" > first aid incident<br>
<input type="radio" name="I am reporting a:" value="Bike"> Partial disablement<br>
<input type="radio" name="I am reporting a:" value="Bike"> Total disablement<br>
<h3 style="color:darkmagenta;">person_reporting_a_incident</h3>
<font color:white>
Firstname:
<font color='white'>
 <input type="text" name="" placeholder="Enter Firstname">
 </font>
Lastname:
 <input type="text" name="" placeholder="Enter Lastname">
<h3 style="color:darkmagenta;">person_involved_in_incident</h3>
Firstname:
 <input type="text" name="" placeholder="Enter Firstname">
Lastname:
 <input type="text" name="" placeholder="Enter Lastname">

<h3 style="color:darkmagenta;">Incident_Date_and_Time</h3>
<label>Date:</label>
<input type="month" min="2013-01" max="2015-12"/><br><br>
Time: <input type="time" id="myTime" value="">
<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myTime").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

<h3 style="color:darkmagenta;">Location_of_incident</h3>
<input type="text" name="none" placeholder="none">
<h3 style="color:darkmagenta;">Please_describe_the_event_in_detail</h3>
<input type="text" name="none" placeholder="Description" height="150"><br>
<form action="">
<h3 style="color:darkmagenta;">Was_damage_done_to_the_property</h3><br>
<input type="radio" name="Was damage done to the property" value="yes"> yes<br>
  <input type="radio" name="Was damage done to the property" value="no"> no<br>
<h3 style="color:darkmagenta;">Could_this_incident_been_avioded</h3><br>

  <input type="radio" name="Could this incident been avioded" value="yes"> Yes<br>
  <input type="radio" name="Could this incident been avioded" value="No"> No<br>
 
</form>



<h3 style="color:darkmagenta;">Please_explain</h3><br>
<input type="text" name="none" placeholder="none" <br>
<h3 style="color:darkmagenta;">I_certify_that_the_information_is_true</h3><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<input type="submit" value="Submit" style="background-color:green;height:20px;width:60px">
</center>
</form>
</body>
</html>
