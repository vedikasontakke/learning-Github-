<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">

</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>V</span>edika <span>S</span>ontakke</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
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
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Vedika <span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Find out what you like doing best and get someone to pay you for doing it.</p>
        <p>Failure doesn't mean you are a failure it just means you haven't succeeded yet.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Web Design</h2>
          <p>“A successful website does three things:
            It attracts the right kinds of visitors.
            Guides them to the main services .
            Collect Contact details for future ongoing relation.”</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Android App Design</h2>
          <p>“Android development is the process by which developers create
             Android mobile apps. 
             “An app is not all about technology
              It is a dream towards future”</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>IOS App Design</h2>
          <p>“The rich and interactive experiences we have come to expect on mobile apps have created 
            new standards and expectations for all digital media including the web."</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Programming</h2>
          <p>“Any fool can write code that a computer can understand.
             Good programmers write code that humans can understand. And many do ”</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  
  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Quiz App</h2>
            <p>In this Quiz Application, users can start their MCQ-based examination. each
              question has a specific time limit. users can see their scores after the
              completion of time or after they submit the paper</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Popular News</h2>
            <p>this is an amazing user friendly application have a goal to create a News app which gives a user regularly-updated news from the internet related to
              a particular topic, person, or location.
              </p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 3</h1>
            <h2>Kids Learning Ap</h2>
            <p>During the COVID-19 situation where all workplaces and schools were
              closed. This application fulfils some amazing activities and the learning material for the preschool children
              </p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 4</h1>
            <h2>BMI APP</h2>
            <p>This project consists of creating an Android App that calculates BMI ( Body
              Mass Index ) & then report its status with some advices to the user</p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 5</h1>
            <h2>Music Player</h2>
            <p>Play songs for free from the rest api and you can also view all the songs from your mobile with best
              features which is very easy to use 
            </p>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/vedika.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Android Developer</h2>
        <p>Seeking a beginner role to enhance and explore my technical knowledge gained at reputed University as a
          Computer Engineer.
          I am pursuing my diploma from Government Polytechnic Amravati as well as exploring myself in the skills such as app design 
          , web desgin and enjoying coding which is full of fun  
          </p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91 9730548995</h2>
           <!-- <h2>+1 234 123 1234</h2> -->
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>vedikasontakke2003@gmail.com</h2>
            <!--<h2>abcd@gmail.com</h2> -->
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Karanja (Lad) , Washim , Maharastra </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>V</span>edika <span>S</span>ontakke</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
     <!--<div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div> -->
      <p>Copyright © 2021 Vedika. All rights reserved</p>
    </div> 
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>