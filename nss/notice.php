<?php
include 'co.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">


<script>

function validateform()
{

var nam=/^[a-zA-Z\s]+$/;
var c=document.myform.matter.value;
 if(c==null || c=="")
	   {
	   alert("mattercan't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.matter.value)) {
    alert('Please provide a valid name');
    matter.focus;
    return false;
 } 
var b=document.forms["myform"]["date"].value;
if(b=="")
{
alert("Please Fill date ?");
return false;
}
var c=document.forms["myform"]["time"].value;
if(c=="")
{
alert("Please Fill time");
return false;
}
}
</script>


<link rel="stylesheet" type="text/css" href="style1.css">

<style>

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url("bg.png") no-repeat center center fixed;
  background-size: cover;

}

</style>
</head>
<body>
<div id="bg"></div>
<form name="myform" action="notice.php" onsubmit="return validateform()" method="post">


  <table  border="0" width="100%">
    <center><h1><u> NOTICE  </u></h1></center>
    <tr>
      <td>Matter</td>
      <td ><input type="text" name="matter" id="t1" /></td>
    </tr>
    
      <td>Date</td>
      <td><input type="date" name="date" id="t8" /></td>
    </tr>
	<tr>
      <td>Time</td>
      <td><input type="time" name="time" id="t9" /></td>
    </tr>
	
   
  </table>
 <center><input type="submit" value="submit" name="submit"  />
</fieldset>
</form>
<?php
  if(isset($_POST['submit']))
   {
     $matter=$_POST['matter'];
     
 $date=$_POST['date'];
     $time=$_POST['time'];
 
  
		$sq="insert notice (date,time,matter)values('$date','$time','$matter')";
if(mysqli_query($co,$sq))
{
	
      echo "<script> alert('Success');
           window.location='notice.php'</script>";
}
}
   
?>
           