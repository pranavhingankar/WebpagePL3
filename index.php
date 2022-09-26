

<!DOCTYPE html>
<html>

<head>
  <title>Easy Techs</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#EpicNav">
  <!--Header -->
  <nav id=EpicNav class="navbar navbar-expand-lg fixed-top" style="background-color: #b463eb;">
    <a class="navbar-brand" href="#"><img class="Img" src="Logo.jpeg" height="48px" width="85px"></a>
    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-dark navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto w-100 justify-content-end ">
        <li class="nav-item active ">
          <a class="nav-link " href="#section0">About Us <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  " href="#section1">Portfolio</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#section2">Services</a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link  " href="#section3">How we work</a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link " href="#contact">Contact us</a>
        </li>

      </ul>
    </div>
  </nav>

  <style>
    .Img {
      border-radius: 5px;
    }

    .navbar {
      box-shadow: 10px 14px 30px 2px #c0abcf;
    }



    .nav-item {

      margin-right: 15px;
      border: 1px;
      border-radius: 8px;
    }


    /*.active, .nav-item:hover{
              background-color:white;
              border: 1px solid rgb(157, 61, 201);
            
              } 
  */
  </style>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    /* var btnContainer = document.getElementById("navbarSupportedContent");

          var btns = btnContainer.getElementsByClassName("nav-item");

          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
            });
          }*/

    $(document).on('click', '.nav-link.active', function() {
      var href = $(this).attr('href').substring(1);
      //alert(href);
      $(this).removeClass('active');
      $('.tab-pane[id="' + href + '"]').removeClass('active');

    });
    $(document).mouseup(function(e) {
      var container = $("#tablist"); // target ID or class
      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        // get Event here
        $('.active').removeClass('active');
      }
    });
  </script>

  <!--About Us-->

  <div class="container about" style="width : 100%">
    <div class="row text-center con ml-0" data-aos="fade-right" id="section0">
      <div class="col-md-8" style="margin-left: -7%; text-align: start; font-family: Nunito, sans-serif">
        <h1 class="text" style="color: #9B1BE4; font-size: 3rem;">We Design, Code and Create.</h1>
        <br>
        <h4 class="text" style="color: #9B1BE4; font-size: 1.7rem;">We are a group of enthusiastic undergrads with a passion to serve the world.</h4>
        <p style="font-size: 1.2rem"> We provide freelancing services to small businesses and corporates. We have created multiple projects in web developement and Machine Learning.We also provide teaching & training services as Easy Code Classes.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <img class="easy" src="Easytech.png" data-aos="fade-left">
      </div>
    </div>
  </div>
  </div>

  <!--About Us END-->

  <br>

  <br>
  <!--Portfolio-->
  
    <!--Portfolio ENd-->

    <br>
    <br>

    <!--Our Values
    <div class="Values">
      <img src="Valuefinal.png"  style="margin-top: 5%;">
    </div>
    Our Values End-->
    <div class="ValueHeading"  data-aos="fade-down">
    <h2>OUR VALUES</h2>
    <h1>Pocket Friendly, Punctual & Peculiar</h1>
   </div>
    <div class="main"  data-aos="fade-down">
      <div class="columns">
        <div class="cards">
          <img src="Value1.png">
          <h3>Best Price Estimation</h3>
          <p>We understand the need and position of customer. We work for the cause and not for the greed.</p>
          <br>
        </div>
      </div>
    
      <div class="columns">
        <div class="cards">
            <img src="Value2.png">
            <h3>Faster Than You Think</h3>
            <p>We Believe in time supremacy. We do not commit anything without a plan and deliver on time if we commit. </p>
             <br>
          </div>
      </div>
      
      <div class="columns">
        <div class="cards">
            <img src="Value3.png" style="height: 30%;">
            <h3>Craving for the wooww...</h3>
          <p>We innovatively manage our resources for market research and best possible outcomes which results into the Wow! moment for our customers.</p>
           
        </div>
      </div>
    </div>

    <!--Services We Provide-->

    <br>
    <br>

    <div class="Service" data-aos="fade-up" id="section2">
      <div class="Back">

        <h2><b> Our Services </b> </h2>
        <br>
      </div>
      <div class="row1">
        <div class="column1">
          <div class="card1">
            <img src="Web.png">
            <h4>Web Development</h4>
            <br>
            <p>We understand the need and position of customer. We work for the cause and not for the greed.</p>
      
          </div>
        </div>

        <div class="column1">
          <div class="card1">
            <img src="ML.png">
            <h4>Machine Learning</h4>
            <p>We Believe in time supremacy. We do not commit anything without a plan and deliver on time if we commit. </p>
             <br>
          </div>
        </div>

        <div class="column1">
          <div class="card1">
            <img src="Android.png">
            <h4>Android</h4>
            <p>We innovatively manage our resources for market research and best possible outcomes which results into the Wow! moment for our customers.</p>
          </div>
        </div>
      </div>
    </div>
    <!--Services We Provide End-->

      <!--How We Work-->
  
    <div class="head"   id="section3">
        <button class="Title"><b>How we work</b></button>
      </div>
    <div class="container-fluid howwework">
   <div class="col-md-6 howweworktext"   data-aos="fade-right">
      <p>- Lorem Ipsum is simply dummy text of
            the printing and typesetting industry.
            - em Ipsum has been the industry's
            standard dummy text ever since the 1500s,
            - en an unknown printer took a galley of type
            d scrambled it to make a type specimen book.
            - It has survived not only five centuries,
            but also the leap into electronic typesetting,
            - remaining essentially unchanged. It was popularised in
            the 1960s with the release of Letraset sheets
            - containing Lorem Ipsum passages, and more
            recently with desktop </p>
    </div>

    <div class="col-md-9 howweworkimg" data-aos="fade-left">
        <img src="Teamwork.png">
    </div>
  
    </div>

    <!--How We Work End-->
    <!--Contact Form and footer-->
    
<section id="contact" class="contact" >

<div class="card contactcont" data-aos="fade-up">

    <header class="section-header text-center">
        <h2>Contact</h2>
    </header>

    <div class="row gy-4">

        <div class="col-lg-6 text-center">

            <div class="row gy-4">
                <div class="col-md-12">
                    <div class="info-box">
                        <img src="address-rbg.png" style="opacity: 1;"alt="" width="60" height="38">

                        <h3>Our Address</h3>
                        <p>Easy Techs, New Ravi Nagar<br>Amaravati, MH 444605</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <img src="email1-rbg.png" style="opacity: 1;"alt="" width="50" height="38">
                        <h3>Email Us</h3>
                        <p>easytechs.owner@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <img src="call1.png" style="opacity: 1;"alt="" width="50" height="36">
                        <h3>Call Us</h3>
                        <p>+91 8446214899</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <form class="email-form">
                <div class="row gy-4">

                    <div class="col-md-6 ab">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>

                    <div class="col-md-6 ab">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>

                    <div class="col-md-12 ab">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="col-md-12 ab">
                        <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        
                        <button type="submit" class="send_button" name="done">Send Message</button>
                    </div>

                </div>
            </form>

        </div>

    </div>

</div>

</section>
<!-- End Contact Section -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-top">
<div class="container">
    <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="Easy_Techs_Logo-rbg.png" alt="">
                <span>Easy Techs</span>
            </a>

            <div class="social-links mt-3">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
        </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
               
            </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
            
                <li><a href="#">Graphic Design</a></li>
            </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-left text-md-start">
            <h4>Contact Us</h4>
            <p>
                Easy Techs <br> New Ravi Nagar, Amaravati (MH)<br> 444604 <br><br>
                <strong>Phone:</strong> +91 8446214899<br>
                <strong>Email:</strong> easytechs.owner@gmail.com<br>
            </p>

        </div>

    </div>
</div>
</div>

<div class="container">
<div class="copyright">
    &copy; Copyright <strong><span>Easy Techs</span></strong>. All Rights Reserved
</div>
<div class="credits">
    Designed by <a href="#">EasyTechs</a>
</div>
</div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>



</footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Footer -->
  <!--Contacy form and footer End-->


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 150,
      duration: 1000,
    });
  </script>




</body>

</html>