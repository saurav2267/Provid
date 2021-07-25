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
  <title>Safety Measures</title>
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
  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title"><b><span>S</span>afety<span> M</span>easures</b></h1>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><center><img src="https://www.redcross.org/content/dam/icons/general-icons/tissue/Tissue-1000x1000-R-Pl.png.img.png"/></center></div>
          <h2>Sneeze or cough?</h2>
          <p>Cover your nose and mouth with a tissue or use your elbow.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://www.redcross.org/content/dam/icons/general-icons/wash-hands/Wash-Hands-1000x1000-R-Pl.png.img.png"/></div>
          <h2>Wash your hands</h2>
          <p>Wash your hands often with soap and water for at least 20 seconds.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://www.redcross.org/content/dam/icons/general-icons/disinfectant/Disinfectant-1000x1000-R-Pl.png.img.png"/></div>
          <h2>Clean and disinfect</h2>
          <p>Clean and disinfect surfaces around your home and work frequently.</p>
        </div>
		<div class="service-item">
          <div class="icon"><img src="https://www.redcross.org/content/dam/icons/general-icons/social-distancing/Social-Distancing-1000x1000-R-Pl.png.img.png"/></div>
          <h2>Social Distancing</h2>
          <p>Keep at least 6 feet from others if you must be in public.</p>
        </div>
		<div class="service-item">
          <div class="icon"><img src="https://www.redcross.org/content/dam/icons/disasters/pandemic-flu/Pandemic-Flu-1000x1000-R-Pl.png.img.png"/></div>
          <h2>Wear Masks</h2>
          <p>Wear a mask covering your mouth and nose when around others.</p>
        </div>
		<div class="service-item">
          <div class="icon"><img src="https://www.redcross.org/content/dam/icons/disasters/pandemic-flu/Pandemic-Flu-1000x1000-R-Pl.png.img.png"/></div>
          <h2>Self Isolate</h2>
          <p>Stay Home if you are sick. Self Isolation is very important.</p>
        </div>
      </div>
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