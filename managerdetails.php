<!--<?php 
   session_start();
   $role = $_SESSION['sess_userrole'];
   if(!isset($_SESSION['sess_username'])){
     //header('Location: index.php?err=2');
   }
   
   ?>-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="FFE4C4">
 <?php
               require "config1.php";
               
             // $id = $_SESSION['sess_userid'];
             // echo "<script>alert('".$_SESSION['sess_username']."');</script>";
             // echo $id;
               
                 $sql = 'SELECT * FROM info';
               
                $result = mysqli_query($con, $sql);
//$result = $con->query($sql);

if ($result->num_rows > 0) {
               
                   print "<table border = 1 cellspacing = 5px cellpadding = 5% ; align = center>
                   <tr> <th> ID</th> <th> Firstname </th> <th> Lastname </th> <th> Incident_Date</th>  <th> Incident_time </th> <th>Location_of_incident</th> <th> Was_damage_done_to_the_property</th> <th>I_certify_that_the_information_is_true</th> </tr>";
               
                   
                   while($row = $result->fetch_assoc()) {
                       print "<tr>";
                        print "<td> ". $row["id"] ."</td>";
                       print "<td> ". $row["Firstname"] . "</td>";
                       print "<td> ". $row["Lastname"]. "</td>";
                       print "<td> ". $row["Incident_Date"]. "</td>";
                       print "<td> ". $row["Incident_time"]. "</td>";
                       print "<td> ". $row["Location_of_incident"]. "</td>";
                       print "<td> ". $row["Was_damage_done_to_the_property"]. "</td>";
                       print "<td> ". $row["I_certify_that_the_information_is_true"]. "</td>";
					   
					   
						 
				   }
                     ?>

					
					 <td><a href="main_update2.php?id=<?php echo $row['id'];?>">Edit</a></td>
                         <td><a href="main_delete2.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php
                      print "</tr>";
                     print "</table>";
               
                   }else{
                       print "No Record Found..!!!! ";
                 }
               
                  ?>
				  



</body>
</html>