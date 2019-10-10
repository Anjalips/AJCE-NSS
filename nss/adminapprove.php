<?php
include "co.php";
$em=$_GET['id'];
$sql2="update register set approvedstatus='1' where userid='$em'";
if(mysqli_query($co,$sql2))
{
echo "<script>alert('Approved');
      window.location='approve.php'</script>";
}
?>
