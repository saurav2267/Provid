<?php
session_start();
define('DEFAULT_TIMEZONE','UTC');
$con = mysqli_connect('localhost','root','test');
mysqli_select_db($con,'user_registration');
$username = $_POST['username'];
$date = $_POST['date'];
$time = $_POST['time'];
$v = "select * from users where username='$username'";
$res = mysqli_query($con,$v);
$num1 = mysqli_num_rows($res);

if($num1 != 1)
{
	echo '<script type="text/javascript">
	alert("Username not found");
	window.location.href="appointments.php";
	</script>';
}

	$check = "select * from appointments where date ='$date' and time='$time'";
	$book = mysqli_query($con,$check);
	$app = mysqli_num_rows($book);
	if($app != 0)
	{
		echo '<script type="text/javascript">
		alert("Slot not available, Select a different slot");
		window.location.href="appointments.php";
		</script>';
	}
	else
	{
		$book = "insert into appointments(username,date,time) values('$username','$date','$time')";
		mysqli_query($con,$book);
		echo '<script type="text/javascript">
		alert("Booking Successful");
		window.location.href="appointments.php";
		</script>';
	}
?>