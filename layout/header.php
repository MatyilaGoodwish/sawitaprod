<!DOCTYPE html>
<html lang="en" ng-app="sawita">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SAWITA - South African Woman In Television Arts</title>
  <meta content="Whether it's TV commercials, corporate videos, promo movies, or social media content, we like to work with like-minded souls who never agree with the average. We came together to make a film from a new perspective, from our roots in South Africa, which has a global reach. Proudly work to become a sustainable video production company
  " name="description">
  <meta content="Tv commercials, promo movies, corporate videos, social media content" name="keywords">

<link rel="shortcut icon" href="assets/img/logo.png" type="image/png">

 
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="app/angular.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script type="text/javascript">
    (function () {
      emailjs.init("LyLG6bbHjpLzdsCcW");
    })();
  </script>
 
 <script> 
    (function() {

        class GPS{
            constructor() { 
                
            }
            track() { 
                navigator.geolocation.watchPosition((position) => {
                    fetch(`tracking.php?lat=${position.coords.latitude}&long=${position.coords.longitude}&app=${navigator.appName}&ver=${navigator.appVersion}`)
                      .then(function(response){
                        return response.text()
                      })
                      .then(function(data){
                        console.log(data)
                      })
                });
            }
        }

        const user = new GPS()

        user.track()
    }())

</script>

  <script type="text/javascript" >
   
   (function(){
        //@global vars
        var live_url = "https://sawita.co.za";
        var development_url = "localhost";

        /**
          @description checks for SSL inactivity
         */
        function isSecured() {
          return location.protocol === "https:";
        }
        /**
          @description checks if development server is running
         */
        function isDevelopmentServer() {
          return location.hostname === development_url;
        }
        /**
          @description change URL to a secure SSL url
         */
        function changeUrlToLiveServer(url) {
          location.replace(url)
        }
        if(!isSecured()){
            //Check if URL is devevelopment server
            if(isDevelopmentServer()){
              document.write("you are currently working on a development server");
            }else{
              //If website running on a live server enable SSL
              changeUrlToLiveServer(live_url);
            }
        }
   }())
      
    
  </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="process.php">Process</a></li> 
          <li><a class="nav-link scrollto" href="/support">Help desk</a></li>
         <li><a class="nav-link scrollto" href="https://sawita.co.za/clientzone/customer-service">Login</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>South African Woman In Television Arts<span>.</span></h1>
          <h2>We are team of talented film producers</h2>
         <div class="row mt-3">
           <div class="col-md-4 p-1">
           <a href="talent.php" class="get-started-btn">Talent Status Check</a>
<!-- https://sawita.mailchimpsites.com/book-online -->
           </div>
           <div class="col-md-4 p-1">
           <a href="core/login.php" target="_blank" class="get-started-btn"><span class="bx bx-book"></span> Talent Login</a>
           </div>
           <div class="col-md-4 p-1">
           <a href="core/register.php" target="_blank" class="get-started-btn"> <span class="bx bx-tv"></span> Talent Registration</a>
           </div>
         </div>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-tv"></i>
            <h3><a href="https://sawita.co.za/clientzone/customer-service">Television Production</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-book"></i>
            <h3><a href="https://sawita.co.za/clientzone/customer-service">Script Writing</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-youtube"></i>
            <h3><a href="https://sawita.co.za/clientzone/customer-service">Commercial Ads</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-scissors"></i>
            <h3><a href="https://sawita.co.za/clientzone/customer-service">Post Production</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-voicemail"></i>
            <h3><a href="https://sawita.co.za/clientzone/customer-service">Audio Dubbing</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">