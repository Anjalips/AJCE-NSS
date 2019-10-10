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
var c=document.myform.fq.value;
 if(c==null || c=="")
	   {
	   alert("question can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.fq.value)) {
    alert('Please provide a valid question');
    fq.focus;
    return false;
 } 
var nam=/^[a-zA-Z\s]+$/;
var c=document.myform.fa.value;
 if(c==null || c=="")
	   {
	   alert("answer can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.fa.value)) {
    alert('Please provide a valid answer');
    fa.focus;
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
<form name="myform" action="faq.php" onsubmit="return validateform()" method="post">


  <table  border="0" width="100%">
    <center><h1><u> FAQ </u></h1></center>
    <tr>
      <td>Question</td>
      <td ><input type="text" name="fq" id="t1" /></td>
    </tr>
    <tr>
      <td>Answer</td>
      <td><input type="textarea" name="fa" id="t2" /></td>
    </tr>
	
   
  </table>
 <center><input type="submit" value="submit" name="submit"  />
</fieldset>
</form>
<?php
  if(isset($_POST['submit']))
   {
     $fq=$_POST['fq'];
     $fa=$_POST['fa'];
 
 $sq="insert faq (	fquestions,fanswers)values('$fq','$fa')";
if(mysqli_query($co,$sq))
{
	
      echo "<script> alert('Success');
           window.location='faq.php'</script>";
}
}
   
?>
           