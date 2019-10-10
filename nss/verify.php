<?php
include "co.php";
$em=$_GET['id'];
$sql2="update register set verifystatus='1' where userid='$em'";
if(mysqli_query($co,$sql2))
{
echo "<script>alert('Verified');
      window.location='viewrequest.php'</script>";
}
?>
