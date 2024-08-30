<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Electronic Waste System || Home Page</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- Additional CSS for animations and colors -->
  <style>
    body{
      font-family: 'Times New Roman', Times, serif;
    }
    /* Keyframes for text animation */
    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50%);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(50%);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes bounceIn {
      0% {
        opacity: 0;
        transform: scale(0.5);
      }
      60% {
        opacity: 1;
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Applying the animation to the text */
    .slider_detail h1 {
      animation: slideInLeft 1s ease-in-out;
      color: #fff;
      font-size: 2.5rem;
      line-height: 1.2;
    }

    .slider_detail p {
      animation: slideInLeft 1s ease-in-out;
      color: #fff;
      font-size: 1.2rem;
      margin-top: 10px;
    }

    .slider_img-box img {
      animation: slideInRight 1s ease-in-out;
      max-width: 100%;
      border-radius: 10px;
    }

    /* Bounce animation for call-to-action buttons */
    .slider_detail a {
      display: inline-block;
      padding: 15px 30px;
      margin-top: 20px;
      background-color: #ff6f61;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
      animation: bounceIn 1s ease;
    }

    .slider_detail a:hover {
      background-color: #ff4a3f;
      transform: scale(1.1);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    /* Gradient background for slider */
    .slider_section {
      background: linear-gradient(45deg, #00c6ff, #0072ff);
      padding: 80px 0;
      color: #fff;
    }

    /* Carousel controls */
    .carousel-control-prev,
    .carousel-control-next {
      width: 5%;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 50%;
      transition: background-color 0.3s;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background-color: rgba(255, 255, 255, 0.8);
    }

    /* Additional Sections Styling */
    .section {
      padding: 60px 0;
      text-align: center;
    }

    .section h2 {
      font-size: 2rem;
      color: #0072ff;
      margin-bottom: 20px;
      animation: fadeInUp 1s ease-out;
    }

    .section p {
      font-size: 1.1rem;
      color: #333;
      animation: fadeInUp 1.5s ease-out;
    }

    .section img {
      max-width: 100%;
      border-radius: 10px;
      margin-top: 20px;
    }

    .call-to-action {
      background: #ff6f61;
      color: #fff;
      padding: 40px 0;
    }

    .call-to-action h2 {
      font-size: 2rem;
      color: #fff;
    }

    .call-to-action a {
      display: inline-block;
      padding: 15px 30px;
      margin-top: 20px;
      background-color: #fff;
      color: #ff6f61;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .call-to-action a:hover {
      background-color: #ff4a3f;
      color: #fff;
    }

    /* Footer styling */
    .footer_hr {
      border: 0;
      height: 3px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      margin: 20px 0;
    }

    footer {
      background: #004d40;
      color: #fff;
      padding: 30px 0;
      text-align: center;
      font-size: 1.1rem;
    }

    footer a {
      color: #ffeb3b;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <?php include_once('includes/header.php'); ?>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row align-items-center">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>"Reduce <span> Waste Impact"</span></h1>
                  <p>"Reduce waste by making conscious choices and adopting minimalistic practices to help preserve resources and protect our planet."</p>
                  <div>
                    <a href="users/login.php">List Your Electronic Waste</a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.png" alt="Electronic Waste">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row align-items-center">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>"Reuse <span>Resources Wisely"</span></h1>
                  <p>"Reuse materials creatively and efficiently to minimize waste, extend the lifecycle of products, and contribute to a sustainable future."</p>
                  <div>
                    <a href="users/login.php">List Your Electronic Waste</a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.png" alt="Electronic Waste">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row align-items-center">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>"Recycle <span>for Sustainability"</span></h1>
                  <p>"Recycle responsibly by sorting and processing materials correctly, ensuring valuable resources are reclaimed and environmental impact is reduced."</p>
                  <div>
                    <a href="users/login.php">List Your Electronic Waste</a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.png" alt="Electronic Waste">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->

    <!-- Introduction Section -->
    <section class="section introduction" style="
  background: linear-gradient(135deg, #f0f9ff, #cbebff);
  padding: 60px 20px;
  text-align: center;
  position: relative;
  overflow: hidden;
">
  <div class="container" style="
    position: relative;
    z-index: 1;
  ">
    <h2 style="
      font-size: 2.5rem;
      color: #0072ff;
      margin-bottom: 20px;
      animation: fadeInUp 1s ease-out;
    ">Welcome to Electronic Waste System</h2>
    <p style="
      font-size: 1.2rem;
      color: #333;
      margin-bottom: 30px;
      animation: fadeInUp 1.2s ease-out;
    ">We are dedicated to helping you manage your electronic waste responsibly. Our platform provides an easy way to list, track, and recycle your old electronics while contributing to a cleaner environment.</p>
    <img src="https://media.istockphoto.com/id/984719158/vector/e-waste-in-recycling-sign-symbol.jpg?s=612x612&w=0&k=20&c=yHx43BbjqhgfwlFbZFBVss6vNXfBBdqSe1sFVmVnEMs=" alt="Welcome" style="
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      animation: zoomIn 1s ease-out;
    ">
  </div>
  <!-- Decorative elements -->
  <div style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent);
    z-index: 0;
    animation: float 5s infinite ease-in-out;
  "></div>
</section>

<style>
  /* Keyframes for text and image animations */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes zoomIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes float {
    0% {
      transform: translateY(-10px);
    }
    50% {
      transform: translateY(10px);
    }
    100% {
      transform: translateY(-10px);
    }
  }
</style>


    <!-- How It Works Section -->
    <section class="section how-it-works" style="
  background: linear-gradient(135deg, #e0f7fa, #b9fbc0);
  padding: 60px 20px;
  text-align: center;
  position: relative;
  overflow: hidden;
">
  <div class="container" style="
    position: relative;
    z-index: 1;
    
  ">
    <h2 style="
      font-size: 2.5rem;
      color: #0072ff;
      margin-bottom: 40px;
      animation: fadeInUp 1s ease-out;
    ">How It Works</h2>
    <div class="row" style="
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      
    ">
      <div class="col-md-4" style="
        margin-bottom: 20px;
        padding: 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transform: scale(1);
        transition: transform 0.3s, box-shadow 0.3s;
        margin-right:10px;
      ">
        <div class="how-it-works-item" style="
          padding: 20px;
        ">
          <h3 style="
            font-size: 1.8rem;
            color: #0072ff;
            margin-bottom: 10px;
            animation: bounceIn 1s ease-out;
          ">1. List Your Waste</h3>
          <p style="
            font-size: 1.1rem;
            color: #333;
          ">Provide details about your electronic waste through our easy-to-use form.</p>
        </div>
      </div>
      <div class="col-md-4" style="
        margin-bottom: 20px;
        padding: 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transform: scale(1);
        transition: transform 0.3s, box-shadow 0.3s;
      ">
        <div class="how-it-works-item" style="
          padding: 20px;
        ">
          <h3 style="
            font-size: 1.8rem;
            color: #0072ff;
            margin-bottom: 10px;
            animation: bounceIn 1s ease-out;
          ">2. Schedule Pickup</h3>
          <p style="
            font-size: 1.1rem;
            color: #333;
          ">Choose a convenient time for us to collect your items.</p>
        </div>
      </div>
      <div class="col-md-4" style="
        margin-bottom: 20px;
        padding: 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transform: scale(1);
        transition: transform 0.3s, box-shadow 0.3s;
      ">
        <div class="how-it-works-item" style="
          padding: 20px;
        ">
          <h3 style="
            font-size: 1.8rem;
            color: #0072ff;
            margin-bottom: 10px;
            animation: bounceIn 1s ease-out;
          ">3. Recycle Responsibly</h3>
          <p style="
            font-size: 1.1rem;
            color: #333;
          ">We ensure that your e-waste is processed and recycled in an environmentally friendly manner.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Decorative elements -->
  <div style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.3), transparent);
    z-index: 0;
    animation: float 5s infinite ease-in-out;
  "></div>
</section>


    <!-- Benefits Section -->
    <section class="section benefits">
      <div class="container">
        <h2>Benefits of Recycling Electronic Waste</h2>
        <p>Recycling electronic waste offers numerous benefits, including:</p>
        <ul>
          <li>Reduction in environmental pollution</li>
          <li>Conservation of valuable resources</li>
          <li>Reduction in energy consumption</li>
          <li>Improved public health and safety</li>
        </ul>
      </div>
    </section>
    <style>
      /* Keyframes for animations */
/* Keyframes for new animations */
@keyframes scaleUp {
  from { transform: scale(0.8); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

@keyframes pulseGlow {
  0% { text-shadow: 0 0 5px rgba(255, 0, 0, 0.5); }
  50% { text-shadow: 0 0 20px rgba(255, 0, 0, 0.7); }
  100% { text-shadow: 0 0 5px rgba(255, 0, 0, 0.5); }
}

@keyframes slideInFromLeft {
  from { transform: translateX(-100%); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}

@keyframes rotateZoom {
  from { transform: rotate(-360deg) scale(0.8); opacity: 0; }
  to { transform: rotate(0) scale(1); opacity: 1; }
}

/* Container styling */
.benefits {
  background: linear-gradient(135deg, #f5f5f5, #e0e0e0);
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  animation: fadeIn 1s ease-out;
}

/* Heading styling */
.benefits h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
  animation: scaleUp 1s ease-out;
  animation-delay: 0.5s;
}

/* Paragraph styling */
.benefits p {
  font-size: 1.2em;
  margin-bottom: 20px;
  animation: slideInFromLeft 1s ease-out;
  animation-delay: 1s;
}

/* List styling */
.benefits ul {
  list-style: none;
  padding: 0;
}

.benefits li {
  font-size: 1.1em;
  margin: 10px 0;
  padding-left: 30px;
  position: relative;
  animation: pulseGlow 2s infinite;
}

.benefits li::before {
  content: '✔';
  color: #007BFF;
  position: absolute;
  left: 0;
  font-size: 1.5em;
  animation: rotateZoom 1s ease-out;
}

/* Hover effect for list items */
.benefits ul li:hover {
  color: #007BFF;
  transform: scale(1.05);
  transition: transform 0.3s ease, color 0.3s ease;
}


      </style>
      <!-- Add the following script at the end of your HTML document or in a script file -->

<!-- Add this script at the end of your HTML document or in a script file -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  const benefitsSection = document.querySelector('.benefits');
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observerCallback = function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        benefitsSection.classList.add('animate');
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  observer.observe(benefitsSection);
});
</script>


    <!-- Testimonials Section -->
    <section class="section testimonials">
      <div class="container">
        <h2>What Our Users Say</h2>
        <div class="row">
          <div class="col-md-4">
            <blockquote>
              <p>"This platform has made it so easy to recycle my old electronics. Thank you for making a difference!"</p>
              <footer>- Jane Doe</footer>
            </blockquote>
          </div>
          <div class="col-md-4">
            <blockquote>
              <p>"A fantastic initiative! I appreciate the convenience and the positive impact on the environment."</p>
              <footer>- John Smith</footer>
            </blockquote>
          </div>
          <div class="col-md-4">
            <blockquote>
              <p>"I've been using this service for months, and it's always efficient and reliable. Highly recommend!"</p>
              <footer>- Emily Johnson</footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    
    <style>
      /* Keyframes for classy animations */
@keyframes fadeInUpBig {
  from { opacity: 0; transform: translateY(50px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes flipIn {
  from { transform: rotateY(-90deg); opacity: 0; }
  to { transform: rotateY(0); opacity: 1; }
}

@keyframes shadowPulse {
  0% { box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); }
  50% { box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4); }
  100% { box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); }
}

/* Section styling */
.testimonials {
  background: linear-gradient(135deg, #fdfbfb, #ebedee);
  padding: 40px 20px;
  border-radius: 20px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
}

/* Heading styling */
.testimonials h2 {
  font-size: 2.8em;
  margin-bottom: 30px;
  text-align: center;
  color: #333;
  animation: fadeInUpBig 1s ease-out;
}

/* Blockquote styling */
.testimonials blockquote {
  background: #ffffff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  position: relative;
  margin-bottom: 30px;
  animation: flipIn 1s ease-out;
  transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.testimonials blockquote::before {
  content: "“";
  font-size: 5em;
  color: #007BFF;
  position: absolute;
  top: -20px;
  left: 20px;
  opacity: 0.2;
}

.testimonials footer {
  text-align: right;
  font-style: italic;
  color: #555;
  transition: color 0.2s ease;
  background-color:white;
}

/* Hover effects */
.testimonials blockquote:hover {
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
  transform: translateY(-10px);
}

.testimonials blockquote:hover footer {
  color: #007BFF;
}

/* Responsive styling */
@media (max-width: 768px) {
  .testimonials .row {
    flex-direction: column;
  }

  .testimonials .col-md-4 {
    margin-bottom: 20px;
  }
}

      </style>

      <!-- Add this script at the end of your HTML document or in a script file -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  const testimonialsSection = document.querySelector('.testimonials');
  const blocks = document.querySelectorAll('.testimonials blockquote');

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observerCallback = function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        blocks.forEach(block => {
          block.classList.add('animate');
        });
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  observer.observe(testimonialsSection);
});
</script>


    <!-- Call-to-Action Section -->
    <section class="call-to-action">
      <div class="container">
        <h2>Join Us in Making a Difference</h2>
        <p>Get involved today and help us manage electronic waste responsibly. Together, we can create a cleaner, greener planet.</p>
        <a href="users/login.php">Get Started</a>
      </div>
    </section>

    <style>
      /* Keyframes for animations */
@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes pulseGlow {
  0% { box-shadow: 0 0 10px rgba(0, 255, 0, 0.6); }
  50% { box-shadow: 0 0 20px rgba(0, 255, 0, 1); }
  100% { box-shadow: 0 0 10px rgba(0, 255, 0, 0.6); }
}

@keyframes slideInRight {
  from { transform: translateX(-100%); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}

/* Section styling */
.call-to-action {
  background: linear-gradient(135deg, #ff7e5f, #feb47b);
  padding: 60px 20px;
  text-align: center;
  border-radius: 15px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
  animation: fadeInDown 1s ease-out;
  position: relative;
  overflow: hidden;
}

/* Heading styling */
.call-to-action h2 {
  font-size: 2.5em;
  color: #fff;
  margin-bottom: 20px;
  animation: slideInRight 1s ease-out;
}

/* Paragraph styling */
.call-to-action p {
  font-size: 1.2em;
  color: #fff;
  margin-bottom: 30px;
  animation: slideInRight 1.2s ease-out;
}

/* Button styling */
.call-to-action a {
  display: inline-block;
  padding: 15px 30px;
  background-color: #ffffff;
  color: #ff7e5f;
  font-size: 1.2em;
  font-weight: bold;
  text-decoration: none;
  border-radius: 30px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
}

.call-to-action a:hover {
  background-color: #ff7e5f;
  color: #fff;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  animation: pulseGlow 1s infinite;
}

      </style>
      <!-- Add this script at the end of your HTML document or in a script file -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  const callToActionSection = document.querySelector('.call-to-action');
  const elements = callToActionSection.querySelectorAll('h2, p, a');

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.2
  };

  const observerCallback = function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        elements.forEach(element => {
          element.classList.add('animate');
        });
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  observer.observe(callToActionSection);
});
</script>

  </div>

  <!-- footer section -->
  <?php include_once('includes/footer.php'); ?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
    }
  </script>

</body>

</html>
