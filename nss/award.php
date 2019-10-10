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
var c=document.myform.awname.value;
 if(c==null || c=="")
	   {
	   alert("applicationname can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.awname.value)) {
    alert('Please provide a valid name');
    name.focus;
    return false;
 } 
var nam=/^[a-zA-Z\s]+$/;
var c=document.myform.des.value;
 if(c==null || c=="")
	   {
	   alert("description can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.des.value)) {
    alert('Please provide a valid name');
    name.focus;
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
<form name="myform" action="award.php" onsubmit="return validateform()" method="post">


  <table  border="0" width="100%">
    <center><h1><u> AWARDS </u></h1></center>
    <tr>
      <td>Award Name</td>
      <td ><input type="text" name="awname" id="t1" /></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input type="text" name="des" id="t2" /></td>
    </tr>
	
   
  </table>
 <center><input type="submit" value="submit" name="submit"  />
</fieldset>
</form>
<?php
  if(isset($_POST['submit']))
   {
     $awname=$_POST['awname'];
     $des=$_POST['des'];
 
 $sq="insert award (	awardname,des)values('$awname','$des')";
if(mysqli_query($co,$sq))
{
	
      echo "<script> alert('Success');
           window.location='award.php'</script>";
}
}
   
?>
           