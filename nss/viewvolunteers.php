 <?php 
include 'co.php'; 
?>
 
 <!DOCTYPE html>
<html>
	<head>

		<title>View Volunteers</title>

		
     
	
	</head>

	<body id="home">
		
  <table  border="0" width="100%">
    <center><h1><u> AJCE NSS </u></h1></center></table>
			


	
		<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><center>		
<table border="1" cellpadding="10" width="20%" class="table table-striped" >
  <tr><th>Admission number</th>
   
    <th>Name</th>
	<th>Class</th>
    <th>Year</th>
    <th>Address</th>
    <th>Experience</th>
	<th>Phone</th>
	<th>Gender</th>
	<th>Blood group</th>
	<th>Dob</th>
	<th>Email id</th>
	
  </tr>
  </center>
<?php

$res=mysqli_query($co,"select * from register where approvedstatus='1' ");
while($row=mysqli_fetch_assoc($res))
{
$lid=$row['userid'] ;
	$sq=mysqli_query($co,"select emailid from login where userid='$lid' ");
	$r=mysqli_fetch_array($sq,MYSQLI_ASSOC);
	$em=$r['emailid'];
	
?>

<tr>
<td> 
   <?php 
        echo $row['adno'];
    ?>
  </td>
  
<td>
<?php
echo $row['name'];
?>
</td>
<td>
<?php
echo $row['class'];
?>
</td>
<td>
<?php
echo $row['year'];
?>
</td>
<td>
<?php
echo $row['address'];
?>
</td>
<td>
<?php
echo $row['experience'];
?>
</td>
<td>
<?php
echo $row['phone'];
?>
</td>
<td>
<?php
echo $row['gender'];
?>
</td>
<td>
<?php
echo $row['bloodgroup'];
?>
</td>
<td>
<?php
echo $row['dob'];
?>
</td>
<td>
<?php
echo $r['emailid'];
?>
</td>

</tr>
<?php
}
?>
</body>

</html>