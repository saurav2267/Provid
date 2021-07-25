<?php
session_start();

if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
?>
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
  padding: 10px;
  spacing: 20px;
  
  font-weight:bold;
  font-size:20;
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
          <a href="index.php"><b><h1>Pro<span>v</span>id</h1></b></a>
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
    <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title"><b><span>Y</span>our<span> A</span>ppointments</b></h1>
      </div>
	  <table>
  <form action="post_app.php" method="post">
  <tr>
	<th>Username <span style="color:red";>*</span></th><td><input type="text" name="username" required></td>
  </tr>
  <tr>
	<td colspan="2"><center><input style="background-color:crimson;color:white; padding:10px;" type="submit" value="View your appointments"></center></td>
  </tr>
  </form>
  </table>
  <br><br><br><br>
  <button style="background-color:crimson;color:white;padding:10;" onclick="window.location.href='appointments.php';">Book an Appointment</button>
  <br>
  <button style="background-color:crimson;color:white;padding:10;" onclick="window.location.href='del_appointment.php';">Delete Appointments</button>
  </section>
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