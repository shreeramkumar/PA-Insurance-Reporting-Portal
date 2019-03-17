<?php
include('config1.php');
{
$query=mysqli_query($con,"select * from info where status=1");
//print_r($query);exit;
echo '<div class="scollit">
<center>
<h1>selecter</h1></center>
<table border="1px" solid black width="500px">
<thead>
<tr>

<th>I_am_reporting_a</th>
<th>Reporter_Firstname</th>
<th>Reporter_Lastname</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Incident_Date</th>
<th>Incident_time</th>
<th>Location_of_incident</th>
<th>Please_describe_the_event_in_detail</th>
<th>Was_damage_done_to_the_property</th>
<th>Could_this_incident_been_avoided</th>
<th>Please_explain</th>
<th>I_certify_that_the_information_is_true</th>

</tr>
</thead>';
if (mysqli_num_rows($query) > 0) {
           // while($row = mysqli_fetch_assoc($query)) {
while ($row=mysqli_fetch_assoc($query))
{
echo '<tbody><tr>
<td>'.$row['I_am_reporting_a'].'</td>
<td>'.$row['Reporter_Firstname'].'</td>
<td>'.$row['Reporter_Lastname'].'</td>
<td>'.$row['Firstname'].'</td>
<td>'.$row['Lastname'].'</td>
<td>'.$row['Incident_Date'].'</td>
<td>'.$row['Incident_time'].'</td>
<td>'.$row['Location_of_incident'].'</td>
<td>'.$row['Please_describe_the_event_in_detail'].'</td>
<td>'.$row['Was_damage_done_to_the_property'].'</td>
<td>'.$row['Could_this_incident_been_avoided'].'</td>
<td>'.$row['Please_explain'].'</td>
<td>'.$row['I_certify_that_the_information_is_true'].'</td>

';?>

<td><a href="main_delete2.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php
}
		   }
echo '</table></div></center>';
}
?>
