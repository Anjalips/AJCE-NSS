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
var c=document.myform.aname.value;
 if(c==null || c=="")
	   {
	   alert("applicationname can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.aname.value)) {
    alert('Please provide a valid name');
    name.focus;
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
<form name="myform" action="suggestion.php" onsubmit="return validateform()" method="post">


  <table  border="0" width="100%">
    <center><h1><u> SUGGESTION </u></h1></center>
    <tr>
      <td>Suggestion</td>
      <td ><textarea name="sug" id="t1" cols=50 rows=10></textarea></td>
    </tr>
   
   
  </table>
 <center><input type="submit" value="submit" name="submit"  />
</fieldset>
</form>
<?php
  if(isset($_POST['submit']))
   {
     $sug=$_POST['sug'];
    
 
  
		$sq="insert suggestion (suggestion,sstatus)values('$sug','0')";
if(mysqli_query($co,$sq))
{
	
      echo "<script> alert('Success');
           window.location='suggestion.php'</script>";
}
}
   
?>
           