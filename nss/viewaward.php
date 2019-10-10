 <?php 
include 'co.php'; 
?>
 
 <!DOCTYPE html>
<html>
	<head>

		<title>AWARDS</title>

		
     
	
	</head>

	<body id="home">
		
  <table  border="0" width="100%">
    <center><h1><u> Awards </u></h1></center></table>
			


	
		<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>		
<table border="1" cellpadding="10" width="20%" class="table table-striped" ><center>
  <tr><th>Award Name</th>
    <t
    
    <th>Descriptions</th>
	
	 
    
  </tr>
<?php
 $q="select * from award";
 $res=mysqli_query($co,$q);
while($row=mysqli_fetch_assoc($res))
{
	
	

?>

<tr>
<td> 
   <?php 
        echo $row['awardname'];
    ?>a
  </td>
  <td> 
   <?php 
        echo $row['des'];
    ?>
  </td>


</tr>
<?php
}
?>

</body>

</html>