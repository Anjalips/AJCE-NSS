
<html>
<body>
<?php
$server = "localhost";
$user = "root" ;
$password ="";
$db = "minipro";
$co = mysqli_connect($server, $user, $password, $db); 

if($co) {
//echo "Database created";
	//die("connection failed:" . $con->connect_error);
}
else
{
//echo "database not created";
}
?>
</body>
</html>