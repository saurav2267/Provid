<?php
session_start();
$con = mysqli_connect('localhost','root','test');
mysqli_select_db($con,'user_registration');
$email = $_POST['email'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];
$username = $_POST['username'];
$s = "select * from users where username='$username' && email='$email';";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1 or $pass1 != $pass2)
{
	echo '<script type="text/javascript">
		alert("Username or Email ID already registered");
		window.location.href="login.php";
		</script>';
}
else
{	
	$reg = "insert into users(username,email,password) values('$username','$email','$pass1')";
	mysqli_query($con,$reg);
	echo '<script type="text/javascript">
		alert("Registration Successful");
		window.location.href="login.php";
		</script>';
}
?>