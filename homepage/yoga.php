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
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="yoga_style.css">
  <title>Yoga for Immunity</title>
  <style type="text/css">
   body{
	background-color:#A9A9A9;
  }
  .description {
  padding-top:20px;
  font-family: 'Montserrat', sans-serif;
  color: black;
  font-size: 20px;
  line-height:30px;
  text-align: justify;
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
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
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
  <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div style="display: block;" class="mySlides fade">
    <div class="text"><b>Sitting and Breathing (Sukhasana and Pranayama)<b></div>
    <img class="imgclass" src="https://www.yogiapproved.com/wp-content/uploads/2018/03/Sukhasana-with-Arch-728x461.jpg" style="width:100%">
	<p class="description"><b>Sukhasana is the traditional pose for meditation. It allows for optimal breathing and movement of “prana” (life force energy)throughout the body.</b></p>
  </div>

  <div class="mySlides fade">
    <div class="text"> <b>Half Lord of the Fishes (Ardha Matsyendrasana)</b></div>
    <img class="imgclass" src="https://www.yogiapproved.com/wp-content/uploads/2018/03/half-lord-fishes-728x473.jpg" style="width:100%">
	<p class="description"><b>The theory behind twists helping our immunity is that improper digestion causes toxins to build-up. These nasty toxins send the body out of whack and have the potential to create infection or inflammation. Yoga poses that gently compress, twist, or stimulate the stomach can help with digestive issues.</b></p>
  </div>

  <div class="mySlides fade">
    <div class="text"><b>Supported Fish Pose (Matsyasana Variation)</b></div>
    <img class="imgclass" src="https://www.yogiapproved.com/wp-content/uploads/2018/03/Fish-Pose-728x440.jpg" style="width:100%">
	<p class="description"><b>When you’re really feeling beat, this yoga pose boosts your energy levels when you’ve been depleted. Supported Fish Pose also targets the lungs, so it can help open up and relieve congestion.</b></p>
  </div>
  
  <div class="mySlides fade">
    <div class="text"> <b>Forward Fold (Uttanasana)</b></div>
    <img class="imgclass" src="https://www.yogiapproved.com/wp-content/uploads/2017/04/Standing-Forward-Fold-Uttanasana-728x546.jpg" style="width:100%">
	<p class="description"><b>Inverted postures and forward bends bring prana and blood flow to the sinuses, which can help ease congestion. Sinuses and our mucus membranes are our body’s first line of defense against infection, so keeping them healthy can boost our immune system function.</b></p>
  </div>
  
  <div class="mySlides fade">
    <div class="text"><b>Legs Up the Wall (Viparita Karani)</b></div>
    <img class="imgclass" src="https://www.yogiapproved.com/wp-content/uploads/2019/06/Legs-up-on-the-Wall-summer-728x441.jpg" style="width:100%">
	<p class="description"><b>Legs Up the Wall is one of the most relaxing yoga poses for your whole body. It allows lymph drainage, blood circulation to even out, releases pressure from your back, and helps you feel grounded, so in turn your nervous system can completely relax and reset.</b></p>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

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