 <?php 
include 'co.php'; 
?>
 
 <!DOCTYPE html>
<html>
	<head>

		<title>View Activity</title>

		
     
	
	</head>

	<body id="home">
		
  <table  border="0" width="100%">
    <center><h1><u> Activities </u></h1></center></table>
			


	
		<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><center>		
<table border="1" cellpadding="10" width="20%" class="table table-striped" >
  <tr><th>Activity Name</th>
    <th>Place</th>
    <th>Date</th>
	<th>Time</th>
    <th>Volunteer Number</th>
    <th>Work Hours</th>
    <th>Descriptions</th>
	
	 
    
  </tr>
  
  </center>
<?php
 $q="select * from activity where astatus='1'";
 $res=mysqli_query($co,$q);
while($row=mysqli_fetch_assoc($res))
{
	
	

?>

<tr>
<td> 
   <?php 
        echo $row['activityname'];
    ?>a
  </td>
  <td> 
   <?php 
        echo $row['aplace'];
    ?>
  </td>
<td>
<?php
echo $row['adate'];
?>
</td>
<td>
<?php
echo $row['atime'];
?>
</td>
<td>
<?php
echo $row['vno'];
?>
</td>
<td>
<?php
echo $row['hourwork'];
?>
</td>
<td>
<?php
echo $row['description'];
?>
</td>


</tr>
<?php
}
?>

</body>

</html>