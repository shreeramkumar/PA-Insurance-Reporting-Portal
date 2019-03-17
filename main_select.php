<?php
include('config.php');
{
$query=mysqli_query($con,"select * from client where status=1");
//print_r($query);exit;
echo '<div class="scollit">
<center>
<h1>selecter</h1></center>
<table border="1px" solid black width="500px">
<thead>
<tr>
<th>username</th>
<th>emailid</th>
<th>password</th>
<th>retypepassword</th>

</tr>
</thead>';
if (mysqli_num_rows($query) > 0) {
           // while($row = mysqli_fetch_assoc($query)) {
while ($row=mysqli_fetch_assoc($query))
{
echo '<tbody><tr>
<td>'.$row['username'].'</td>
<td>'.$row['emailid'].'</td>
<td>'.$row['password'].'</td>
<td>'.$row['retypepassword'].'</td>';?>
<td><a href="main_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="main_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php
}
		   }
echo '</table></div></center>';
}
?>
