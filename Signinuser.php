<?php
include("connect.php");
extract($_POST);
	$pwd=crypt($password,'secret');
	$rs=mysqli_query($con,"select * from users where email='$email' and password='$pwd'");
	if(mysqli_num_rows($rs)==1)
	{
		$found="N";
		echo "<br>Log in Sucessful!!";
	}
	else
	{
		echo "Invalid Credentials, Please login again<br><a href='index.php'><input type=submit name=signin_submit value=Sign-In /></a>";
	}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
</html>

