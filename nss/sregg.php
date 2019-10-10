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
var c=document.myform.name.value;
 if(c==null || c=="")
	   {
	   alert("name can't be empty");
	   return false;
	   }
    if (!nam.test(document.myform.name.value)) {
    alert('Please provide a valid name');
    name.focus;
    return false;
 } 
if( document.myform.adno.value == "" ||
           isNaN( document.myform.adno.value) ||
           document.myform.adno.value.length != 5 )
   {
     alert( "Please provide a Admission No in the format 123." );
     document.myform.adno.focus() ;
     return false;
   }
var b=document.forms["myform"]["class"].value;
if(b=="")
{
alert("Please Fill which deparment you are ?");
return false;
}
if( document.myform.year.value == "" ||
           isNaN( document.myform.year.value) ||
           document.myform.year.value != 2 )
   {
     alert( "eligible if you are asecond year student" );
     document.myform.year.focus() ;
     return false;
   }
var c=document.forms["myform"]["address"].value;
if(c=="")
{
alert("Please Fill address field");
return false;
}
var c=document.forms["myform"]["experience"].value;
if(c=="")
{
alert("Please Fill  experience");
return false;
}


var emailid = /^([a-z0-9A-Z_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/;
var c=document.myform.emailid.value;
 if(c==null || c=="")
	   {
	   alert("email can't be empty");
	   return false;
	   }
    if (!emailid.test(document.myform.emailid.value)) {
    alert('Please provide a valid email id');
    emailid.focus;
    return false;
 } 

 if( document.myform.phone.value == "" ||
           isNaN( document.myform.phone.value) ||
           document.myform.phone.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123.upto 10 digit" );
     document.myform.phone.focus() ;
     return false;
   }
    if((document.myform.phone.value.charAt(0)!=9) && 
    (document.myform.phone.value.charAt(0)!=8) &&
(document.myform.phone.value.charAt(0)!=7) &&	
    (document.myform.phone.value.charAt(0)!=6))
   {
alert( "Please provide a valid 10 digit mobile no. start with '9' or '8' or'7' or '6'" );
     document.myform.phone.focus() ;
     return false;
   }
   
   var x=document.forms["myform"]["dob"].value;
if(x=="")
{
alert("Please Fill Date of birth");
document.getElementById("dob").focus();
return false;
}
var GivenDate =document.forms["myform"]["dob"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate > CurrentDate){
    alert('Given date is greater than the current date.');
	document.getElementById("dob").focus();
	return false;
}

   var c=document.forms["myform"]["gender"].value;
if(c=="")
{
alert("Please Fill student gender");
return false;
}

 var c=document.forms["myform"]["bloodgroup"].value;
if(c=="-1")
{
alert("Please Fill your blood group");
return false;
}

    if(myform.password.value != "" && myform.password.value == myform.cpassword.value) {
      if(myform.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        myform.password.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(myform.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        myform.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(myform.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        myform.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(myform.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        myform.password.focus();
        return false;
      }
    } 
	else {
      alert("Error: Please check that you've entered and confirmed your password!");
      myform.password.focus();
      return false;
    }

    return true;
 
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
  background: url("rr.jpg") no-repeat center center fixed;
  background-size: cover;

}

</style>
</head>
<body text="white">
<div id="bg"></div>
<form name="myform" action="sregg.php" onsubmit="return validateform()" method="post">


  <table  border="0" width="100%">
    <center><h1><u> AJCE NSS </u></h1></center>
    <tr>
      <td>Student Name</td>
      <td ><input type="text" name="name" id="t1" /></td>
    </tr>
    <tr>
      <td>Admission Number</td>
      <td><input type="text" name="adno" id="t2" /></td>
    </tr>
	<tr>
      <td>Department name</td>
      <td><input type="text" name="class" id="t8" /></td>
    </tr>
	<tr>
      <td>Year Of Study</td>
      <td><input type="text" name="year" id="t9" /></td>
    </tr><tr>
      <td>Address</td>
      <td><input type="text" name="address" id="t10" /></td>
    </tr>
	
      
	  <tr>
      <td>	Experience</td>
      <td><input type="radio" name="experience" id="radio1" value="yes" />
        Yes
        <input type="radio" name="experience" id="radio2" value="no" />
        No </td>
  
    </tr>
	<tr>
      <td>Email Id</td>
      <td><input type="text" name="emailid" id="t12" /></td>
    </tr>
	<tr>
      <td>Phone Number</td>
      <td><input type="text" name="phone" id="t13" /></td>
    </tr>
     <tr>
      <td>Date Of Birth</td>
      <td><input type="date" name="dob" id="dob" /></textarea></td>
    </tr>
	<tr>
      <td>Gender</td>
      <td><input type="radio" name="gender" id="radio3" value="Male" />
        Male
        <input type="radio" name="gender" id="radio4" value="female" />
        Female </td>
    </tr>
<tr>
      <td>Blood group</td>
      <td><select name="bloodgroup" id="i19" >
	  <option value=-1 >select blood group</option>
	  <option value="a+">A+</option>
	  <option value="a-">A-</option>
	  <option value="b+">B+</option>
	  <option value="b-">B-</option>
	  <option value="o+">O+</option>
	  <option value="o-">O-</option>
	  <option value="ab+">AB+</option>
	  <option value="ab-">AB-+</option>
	  </select></td>
 
	
<tr>
      <td>Password</td>
      <td><input type="password" name="password" id="t15" /></textarea></td>
    </tr>
	<tr>
      <td>Conform Password</td>
      <td><input type="password" name="cpassword" id="t16" /></textarea></td>
    </tr>
	
   
  </table>
 <center><input type="submit" value="submit" name="submit"  />
</fieldset>
</form>
<?php
  if(isset($_POST['submit']))
   {
     $name=$_POST['name'];
     $adno=$_POST['adno'];
 $c=$_POST['class'];
     $d=$_POST['year'];
 $e=$_POST['address'];
     $f=$_POST['experience'];
 $g=$_POST['emailid'];
     $h=$_POST['phone'];
 $t=$_POST['gender'];
 $z=$_POST['bloodgroup'];
 $j=$_POST['dob'];
  $s=$_POST['password'];
 //$img=$_FILES["file"]["name"];
//$target_dir = "uploadimg/";
//$target_file = $target_dir.basename($_FILES["file"]["name"]);
//move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
//$image=$target_file;

    
     $ss=mysqli_query($co,"select * from login where emailid='$g'");
	$i=mysqli_num_rows($ss);
	if($i>0)
	{
         echo "
        <script>
        alert('already exists id');
        </script>";
	}
	else
	{
		
		$sq="insert into login(emailid,password,usertype)values('$g','$s','user')";
if(mysqli_query($co,$sq))
{
	$sql=mysqli_query($co,"select userid from login where emailid='$g' ");
	$re=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	$lid=$re['userid'];
	//echo "<script>alert('$lid');</script>";
    $pq="insert into register(adno,userid,name,class,year,address,experience,phone,gender,bloodgroup,dob,verifystatus,approvedstatus)values('$adno','$lid','$name','$c','$d','$e','$f','$h','$t','$z','$j','0','0')";
	if(mysqli_query($co,$pq))
      echo "<script> alert('Success');
           window.location='sregg.php'</script>";
}
}
   }
?>
           