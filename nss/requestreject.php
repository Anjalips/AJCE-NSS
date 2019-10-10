<?php
include "co.php";

$b=$_GET['id'];
$sql=mysqli_query($co,"delete  from register where userid='$b'");
$sqll=mysqli_query($co,"delete  from login where userid='$b'");
if ( $sql && $sqll ){
echo "<script>alert('Removed');
      window.location='viewrequest.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>
