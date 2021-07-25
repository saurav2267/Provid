<?php
session_start();

$con = mysqli_connect('localhost','root','test');
mysqli_select_db($con,'user_registration');
$username = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from users where username='$username' && password='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
	$_SESSION['user']=$username;
	header('location:index.php');
}
else
{	
	echo '<script type="text/javascript">
	alert("Please check your Username or Password");
	window.location.href="login.php";
	</script>';
}
?>