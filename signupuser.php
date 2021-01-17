<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php

extract($_POST);
include("connect.php");
$rs=mysqli_query($con,"select * from users where email='$email'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$pwd=crypt($password1,'secret');
$query="insert into users(name,email,city,password) values('$name','$email', '$city','$pwd')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $email Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID </div>";
echo "<br><a href='index.php'><input type=submit name=signin_submit value=Sign-In /></a>";


?>

</body>
</html>