<?php
session_start();
define('DEFAULT_TIMEZONE','UTC');
$con = mysqli_connect('localhost','root','test');
mysqli_select_db($con,'user_registration');
$username = $_POST['username'];
$ap_id = $_POST['ap_id'];
//$date = $_POST['date'];
//$time = $_POST['time'];

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
	$check = "select * from appointments where ap_id='$ap_id'";
	$del = mysqli_query($con,$check);
	$app = mysqli_num_rows($del);
	if($app == 1)
	{
		$book = "delete from appointments where ap_id='$ap_id'";
		mysqli_query($con,$book);
		echo '<script type="text/javascript">
		alert("Appointment Cancelled");
		window.location.href="appointments.php";
		</script>';
	}
	else
	{
		echo '<script type="text/javascript">
		alert("Appointment ID not found");
		window.location.href="appointments.php";
		</script>';
	}
?>