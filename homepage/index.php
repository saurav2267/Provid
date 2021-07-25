<?php
session_start();

if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Provid</title>
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
          <a href="#hero"><h1>Pro<span>v</span>id</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
			<li><a data-after="Contact">Hi, <?php echo $_SESSION['user'];?></a></li>
			<li><a href="Logout.php" data-after="Contact">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Pro<b style="color:crimson";>V</b>id <span></span></h1>
        <h1>Because <span></span></h1>
        <h1><b style="color:crimson";>V</b> care<span></span></h1>
      </div>	
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title"><b>Ser<span>v</span>ices</b></h1>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><a href="safety_measures.php"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Safety Measures</h2>
          <p>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover. Tips and measures to stay safe.</p></a>
        </div>
        <div class="service-item">
          <div class="icon"><a href="http://localhost:3000/"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Covid X-ray Scanner</h2>
          <p>Public open dataset of chest X-ray and CT images of patients which are positive or suspected of COVID-19 or other viral and bacterial pneumonias.</p></a>
        </div>
        <div class="service-item">
          <div class="icon"><a><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Covi-Bot</h2>
          <p>Latest news about the coronavirus, details about health and hygiene, loactions to nearby hospitals and essential services by talking to your buddy(bottom right).</p></a>
        </div>
		<div class="service-item">
          <div class="icon"><a href="http://localhost:3006/"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Provid-News</h2>
          <p>In these testing times, it is important to stay up to date, get latest news about the happenings around the world all available to you with just 1 click.</p></a>
        </div>
		<div class="service-item">
          <div class="icon"><a href="yoga.php"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Yoga for better Immunity</h2>
          <p>Support Your Immune System With These 5 Yoga Poses for Immunity to help your body help itself when the cold and flu season hits hard. Take the journey inward.</p></a>
        </div>
		<div class="service-item">
          <div class="icon"><a href="appointments.php"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Consult a Specialist</h2>
          <p>In these testing times, taking care of your physical and mental health is of utmost importance. Book an appointment with a specialist and select a date and time slot that best suites you.</p></a>
        </div>
		<div class="service-item">
          <div class="icon"><a href="https://provid1919.github.io/tracker/"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Covid-19 Live Stats</h2>
          <p>Corona Virus is, unfortunately, spreading through the entire world. This service helps to spread awareness by visualizing the data. The data is fetched from an API which is constantly updating.</p></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->
	<hr>
  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <a href="https://callforcode.org/"><img src="https://i.ytimg.com/vi/V4ENXQREyaE/maxresdefault.jpg" alt="img"></a>
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"><b>Ab<span>o</span>ut</b></h1>
        <p>We here at PROVID strive on giving you the latest and most significant advancements related to the COVID 19 pandemic. Get the most recent updates, news, and also get a quick diagnosis to ensure you are free of the virus. Look up nearby hospitals and medical stores, book appointments on the go by selecting a time slot of your choice. Stay Safe, Stay Healthy.</p>
      </div>
    </div>
	</section>
	<section id="services">
    <div class="services container">
		  <h1 class="section-title"><b>Who <span>We</span> Are</b></h1>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://media-exp1.licdn.com/dms/image/C5103AQGgBvF9pWOycw/profile-displayphoto-shrink_400_400/0?e=1600905600&v=beta&t=qJHZUg_KtFD1JgCPxVFqwlMb9gh7ERwe6h2XzxkxLYU"></div>
          <h2>Mervin S George</h2>
		  <p><a style="color:white" href="https://www.linkedin.com/in/mervin-shibu-george-4ab7b3148/">View LinkedIn Profile</a></p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://media-exp1.licdn.com/dms/image/C5103AQG4feuso9GFZQ/profile-displayphoto-shrink_400_400/0?e=1600905600&v=beta&t=StNHyEFyH1xzSpjNzQF-AwD42523hXz5ch8ScANknkI"></div>
          <h2>Rahul S Beelur</h2>
		  <p><a style="color:white" href="http://linkedin.com/in/rahul-beelur-661aa4159">View LinkedIn Profile</a></p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://media-exp1.licdn.com/dms/image/C5603AQF8ujI-CuJZRA/profile-displayphoto-shrink_400_400/0?e=1600905600&v=beta&t=Z7P7eVxYDw2IFqNPkIqxe7IJ3SWWhGVb6mPY5UWcPR0"/></div>
          <h2>Saurav Nambiar</h2>
		  <p><a style="color:white" href="https://www.linkedin.com/in/saurav-nambiar-40590a15b/">View LinkedIn Profile</a></p>
        </div>
		<div class="service-item">
          <div class="icon"><img src="https://media-exp1.licdn.com/dms/image/C5103AQGxfHPUU65XJA/profile-displayphoto-shrink_400_400/0?e=1600905600&v=beta&t=Th7Sfe4WRRqQGd--TU1gxUCFpmy5zrm0aQtwsYqXJwo"/></div>
          <h2>Sudeep Poojary</h2>
		  <p><a style="color:white" href="https://www.linkedin.com/in/sudeep-poojary-489370169">View LinkedIn Profile</a></p>
        </div>
		<div class="service-item">
          <div class="icon"><img src="https://media-exp1.licdn.com/dms/image/C5603AQFmX_KcAL5QXg/profile-displayphoto-shrink_400_400/0?e=1600905600&v=beta&t=D6RlAQDGR0XzG7LkfMeK-kLy-BRRh_Qq4ZakjDPyv8M"/></div>
          <h2>Sujith Ramprasad</h2>
		  <p><a style="color:white" href="https://www.linkedin.com/in/sujith-ramprasad-5a6a89194/">View LinkedIn Profile</a></p>
        </div>
      </div>
    </div>
  </section>
	
  <!-- End About Section -->
	<hr>
  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title"><b><span>C</span>ontact <span>i</span>nfo</b></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91 234 123 1234</h2>
            <h2>+91 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>provid1919@gmail.com</h2>
            <h2>provid1919@yahoo.com</h2>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

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