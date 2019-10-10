<?php
include 'co.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>studentlogin</title>
<link rel="stylesheet" href="n.css">
<script>

function validateform()
{




var emailid = /^([a-z0-9A-Z_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/;
var c=document.myform.username.value;
 if(c==null || c=="")
	   {
	   alert("username can't be empty");
	   return false;
	   }
    if (!emailid.test(document.myform.username.value)) {
    alert('Please provide a valid username');
    emailid.focus;
    return false;
 } 

 
    if(myform.password.value != "") {
      if(myform.password.value.length < 5) {
        alert("Error: Password must contain at least five characters!");
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
    } else {
      alert("Error: Please check that you've entered  your password!");
      myform.password.focus();
      return false;
    }

    return true;
 
}
</script>
</head>
<body background="k.png">
<div class="h1" >
<form name="myform" action="login.php" onsubmit="return validateform()" method="post">

</div>
<div class="box">
<h2>login</h2>
<form method="post" action="login.php">
<div class="inputBox">
<label>USERNAME</label>
<input type="text" name="username" >
</div>
<div class="inputBox">
<label>PASSWORD</label>
<input type="password" name="password" >

</div>
<input type="submit" name="submit" value="Submit">

<table>
 <tr>
        <td>
                 
        
               New User? <a href="sregg.php">Register</a>
        </td>
        </tr>
		</table>
</form>
</div>

</body>
</html>
<?php
if(isset($_POST["submit"]))
{


	$r=$_POST["username"];

    $s=$_POST["password"];
//    $_SESSION['r']=$r;
	
	$ins=mysqli_query($co,"select * from login where emailid='$r' and password='$s' ");
	 $m=mysqli_fetch_array($ins,MYSQL_ASSOC);
	if($m>0)
	{
	
   
    $type=$m['usertype'];
   $lid=$m['userid'];
   $sq=mysqli_query($co,"select approvedstatus from register where userid='$lid'");
   $w=mysqli_fetch_array($sq,MYSQLI_ASSOC);
    if($type=='admin')
    {
        ?>
        <script type="text/javascript">window.location="adminhome.html";</script>
        <?php

    }
   
    else if($type=='user' and $w['approvedstatus']=='1' )
    {
    	?>
<script type="text/javascript">window.location="studenthome.html";</script>
        <?php


    }
	 else if($type=='programofficer')
    {
    	?>
<script type="text/javascript">window.location="programofficerhome.html";</script>
        <?php


    }
 else if($type=='volunteersec')
    {
    	?>
<script type="text/javascript">window.location="volunteersec.html";</script>
        <?php


    }

    }
   else {
    		?>
    		<script type="text/javascript">alert("login failed");</script>
    		<?php
    	}	
   }
   ?>


