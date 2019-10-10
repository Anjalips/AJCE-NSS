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
var c=document.myform.acname.value;
 if(c==null || c=="")
	   {
	   alert("name can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.acname.value)) {
    alert('Please provide a valid name');
    acname.focus;
    return false;
 } 
var nam=/^[a-zA-Z\s]+$/;
var c=document.myform.place.value;
 if(c==null || c=="")
	   {
	   alert("place can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.place.value)) {
    alert('Please provide a valid name');
    name.focus;
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
var b=document.forms["myform"]["vno"].value;
if(b=="")
{
alert("Please Fill Volunteer needed ?");
return false;
}
var b=document.forms["myform"]["how"].value;
if(b=="")
{
alert("Please Fill our of work ?");
return false;
}
var b=document.forms["myform"]["des"].value;
if(b=="")
{
alert("Please Fill description ?");
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
<form name="myform" action="activity.php" onsubmit="return validateform()" method="post">


  <table  border="0" width="100%">
    <center><h1><u> ACTIVITY </u></h1></center>
    <tr>
      <td>Activity Name</td>
      <td ><input type="text" name="acname" id="t1" /></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><input type="text" name="place" id="t2" /></td>
    </tr>
	<tr>
      <td> Date</td>
      <td><input type="date" name="date" id="t8" /></td>
    </tr>
	<tr>
      <td>Time</td>
      <td><input type="time" name="time" id="t9" /></td>
    </tr>
	<tr>
      <td>Volunteers Needed</td>
      <td><input type="text" name="vno" id="t10" /></td>
    </tr>
	<tr>
      <td>Hour of Work</td>
      <td><input type="time" name="how" id="t12" /></td>
    </tr>
	<tr>
      <td>Description</td>
      <td><input type="textarea" name="dec" id="t13" /></td>
    </tr>
	
	
   
  </table>
 <center><input type="submit" value="submit" name="submit"  />
</fieldset>
</form>
<?php
  if(isset($_POST['submit']))
   {
     $acname=$_POST['acname'];
     $place=$_POST['place'];
 $date=$_POST['date'];
     $time=$_POST['time'];
	
     $vno=$_POST['vno'];
 $how=$_POST['how'];
     $dec=$_POST['dec'];
    
     
		
		$sq="insert activity (activityname,aplace,adate,atime,vno,hourwork,description,astatus)values('$acname','$place','$date','$time','$vno','$how','$dec','0')";
if(mysqli_query($co,$sq))
{
	
      echo "<script> alert('Success');
           window.location='activity.php'</script>";
}
}
   
?>