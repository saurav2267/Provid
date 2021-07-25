<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Your Appointments</title>
  <style type="text/css">
  body {
	background-image: url(https://img.freepik.com/free-photo/blur-hospital_1203-7956.jpg?size=626&ext=jpg);
		background-size: cover;
  }
  </style>
  <script>
  window.watsonAssistantChatOptions = {
      integrationID: "ab4465db-9d9a-4d51-b093-12b4ce9dcfd4", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "dac9aac4-00b5-4fa9-89d8-7c294bbf8384", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
<style type="text/css">
table, th, td {
  border-collapse:collapse;
  border: 2px solid black;
  padding: 10px;
  spacing: 10px;
  width:35%;
  text-align:center;
  font-weight:bold;
}
.heading{
	background-color:crimson;
	color:white;
}
</style>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><b><h1>Pro<span>v</span>id</h1></b></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="index.php" data-after="Home"><b>Home</b></a></li>
			<li><a href="Logout.php" data-after="Home"><b>Logout</b></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title"><b><span>Y</span>our<span> A</span>ppointments</b></h1>
      </div>
     <?php
session_start();
define('DEFAULT_TIMEZONE','UTC');
$con = mysqli_connect('localhost','root','test');
mysqli_select_db($con,'user_registration');
$username = $_POST['username'];


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
echo "<p style='font-weight:bold;font-size:20;'>Username: " .$username; echo "</p><br><br>";
$s = "select * from appointments where username='$username'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num > 0)
{
	//echo "<table style='width:60%;height:30%' border='1'>";
	echo "<table border = '1' cellpadding = '5' cellspacing = '5'>";
	echo "<tr><th class='heading'>Appointment ID</th><th class='heading'>Date</th><th class='heading'>Time</th>";
	while($row = mysqli_fetch_assoc($result))
	{   
		echo "<tr><td>" . $row["ap_id"] . "</td><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td></tr>";
	}
	echo "</table>";
}
else
{	
	echo '<script type="text/javascript">
	alert("You do not have any appointments");
	window.location.href="appointments.php";
	</script>';
}
?> 
<br><br><br><br>
<button style="background-color:crimson;color:white;padding:5;" onclick="window.location.href='appointments.php';">Book an Appointment</button>
  <br>
  <button style="background-color:crimson;color:white;padding:5;" onclick="window.location.href='del_appointment.php';">Delete Appointments</button>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1>Pro<span>v</span>id</h1></div>
      <h2>Let's fight COVID-19 together</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.instagram.com/provid_19/"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://mobile.twitter.com/Provid191"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer -->
  
  <script src="./app.js"></script>
</body>
</html>