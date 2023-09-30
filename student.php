<!doctype html>
<html class="no-js" lang="zxx">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Consulting | Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.html">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
  <link rel="stylesheet" href="assets/css/gijgo.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/animated-headline.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/s2.css">


  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <style>
    @import url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/library.less");
    @import url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/variables.less");
    @import url("https://fonts.googleapis.com/css2?family=Eczar:wght@500;800&family=Ultra&display=swap");

    /* video css */
    .container-fluid {
      text-align: center;
      width: 100%;

    }

    .slide-1 {
      height: 85vh;

      padding: 0;
      margin: 0px;
    }

    video {
      position: absolute;
      top: 50%;
      left: 50%;
      right: 0;
      bottom: 0;


      width: 100%;
      height: 100%;

      overflow: hidden;
      background-size: cover;
      object-fit: cover;
      transform: translateX(-50%) translateY(-50%);
    }

    .media {
      background-position: center;
      background-size: cover;
      height: 100%;
      position: absolute;
      transition: all 0.3s ease;
      width: 100%;
    }

    figure {
      height: 100%;
      overflow: hidden;
      position: relative;
    }

    figure a {
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 3;
    }

    figure:hover .media {
      transform: scale(1.25);
    }

    figcaption {
      color: #252830;
      height: 80%;

      margin: 30px;
      left: 0;
      position: absolute;
      top: 0;
      width: 250px;
      opacity: .6;


    }

    .body {
      background-color: white;
      bottom: 0;
      padding: 15px;
      position: absolute;
      width: 100%;
    }



    .videotext {
      font-size: 30px;
      font-family: 'Eczar', serif;
      letter-spacing: 5px;
      font-style: italic;
      font-weight: 800;





    }

    .video-para {
      line-height: 30px;
      font-size: 17px;


    }


    @media (min-width: 668px) {
      .videotext {
        font-size: 30px;
      }

      .video-para {
        font-size: 17px;
      }

    }


    @media (max-width: 668px) {
      .slide-1 {
        height: 60vh;


      }

      .videotext {
        font-size: 20px;
      }

      .video-para {
        font-size: 15px;
        line-height: 15px;

      }

      figcaption {
        width: 170px;
        height: 60%;
        top: -9%;

      }




      .folded {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2em;
        z-index: 1;
        background-color: #fff;
      }

      .folded .fold-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: block;
        width: .5em;
        height: 2px;
        background-color: #000;
      }

      .folded.closed .fold-btn {
        transform: translate(-50%, -50%) rotate(-90deg);
      }

      .body {
        position: relative;
        z-index: 0;
      }

      .closed .body {
        display: none;
      }


    }

    /* navbar and slider space fixing */
    @media (min-width: 700px) {

      .main-body-work {
        margin-top: 80px;

      }
    }

    /* poster css */
    .poster-container {
      padding: 100px;
      background-color:rgba(5, 252, 55, 0.223);;
     
      /* border: 2px solid; */
      justify-content: center;

    }

    h1 {
      font-size: 30px;
      font-family: 'Eczar', serif;
      letter-spacing: 5px;
      font-style: italic;
      font-weight: 800;
    }

    .poster-discription {
      line-height: 30px;
      font-size: 20px;
    }

    /* brand logo carousel css */
    .brand-logo{
      -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
      filter: grayscale(100%);
      -webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
    }
    .brand-logo:hover{
      -webkit-filter: grayscale(0%) ;
	filter: grayscale(0%) ;
    }
  </style>

<body>

  <!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/logo/loder.png" alt="">
        </div>
      </div>
    </div>
  </div> -->

 <!-- first navbar  -->
 <header >

  <nav class="navbar navbar-expand-lg navigation-wrap navbar-light   mx-0 px-0" id="navbar-1">
   
    <div class="container-fluid">
     
      <a href="index-2.html"><img src="/assets/img/logo/Dare2Design.png" alt=""></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item ">
            <a class="nav-link active" href="about.html">ABOUT US</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link active" href="about.html">SUPPORT & DONATE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">JOB OPPORTUNITIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">SIGN UP </a>
          </li>
         
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success border-75" type="submit">Search</button>
        </form>
      </div>
      
    </div>
  </nav>


</header>
<!-- second navbar -->
<nav class="navbar navbar-expand-lg  navbar-light navigation-wrap  mx-0 px-0" id="main-bar">
   
    <div class="container-fluid">
      
   
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  ">
          <li class="nav-item" style="border: none!important;">
            <a class="nav-link active" aria-current="page" href="index.html" >Home</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link active" href="about.html">Dare2design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="techathon.html">tech a thon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="student.html">student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="teachers.html">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="judges.html">judge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sponsor.html">sponsor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Events</a>
          </li>
        </ul>

      </div>
      
    </div>
  </nav>



<!-- off canvas section -->
       
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> <a href="index-2.html"><img src="/assets/img/logo/Dare2Design.png" alt="" ></a></h5>
            <button type="button" class="btn-close btn-close-dark " data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <form class="ul-form d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success rounded" type="submit">Search</button>
            </form>
            <ul class="offcanva-ul-1 ">
              <li class="nav-item ">
                <a class="nav-link active" href="about.html">ABOUT US</a>
              </li>
    
              <li class="nav-item ">
                <a class="nav-link active" href="about.html">SUPPORT & DONATE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">JOB OPPORTUNITIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">SIGN UP </a>
              </li>
             
            </ul>
           
            <ul class=" offcanva-ul-2   ">
              <li class="nav-item" style="border: none!important;">
                <a class="nav-link active" aria-current="page" href="index.html" >Home</a>
              </li>
              <hr>
    
              <li class="nav-item ">
                <a class="nav-link active" href="about.html">Dare2design</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="techathon">tech a thon</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="student.html">student</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="teachers.html">Teachers</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="judges.html">judge</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="sponsor.html">sponsor</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Events</a>
              </li>
              <hr>
            </ul>
          </div>
        </div>

<!-- banner code -->
  <section class="main banner-section border">
   

    <div class="container-fluid page-banner" >
      <div class="banner-text d-flex align-items-center justify-content-center">
        Student
      </div>
    </div>
    


  </section>

  <!-- main body work -->
  <section class="main main-body-work">
    <div class="emuinvent mt-5 ">
    <div class="container  mb-5">
     <div class="row justify-content-center mb-2">
      <div class="cl-xl-7 col-lg-12 col-md-10 col-sm-12">
    
        <div class="section-tittle text-center mb-70">
          <h5 class="first-heading">We Are Invention Education</h5>
          
        </div>
      </div>
    </div>
   
    <div class="row ">
      
      <div class="col-lg-6 mb-3 mb-lg-0">
        
        <p class="poster-discription text-justify">
          Have an idea but don't have any teacher to help you take it forward? Please check
          with your teachers if they will be interested in helping you out with the competition.
          If your  teacher/school does not have time to help you out, students' parents can 
          join our <b style="color:#2b873b;">"Dare 2 Design"</b> program.
          <b style="color:#2b873b;">Dare 2 Design</b> is <b style="color:#2b873b;">EMUiNVENT</b>'s
           Independent Inventors program, where we help such students and teams to bring their ideas to reality.
            Under parents' guardianship we conduct workshops and training (due to Covid19 this year we are conducting them virtually) 
            to help students/ teams convert their idea into a working or a non-working prototype.&nbsp;As a part of these workshops and trainings, students/ 
            teams get help and guidance from budding &amp; experienced engineers and entrepreneurs. These engineers and entrepreneurs will mentor students/ teams and 
            ensure that they are ready to participate in <b style="color:#2b873b;">EMUiNVENT</b>.&nbsp;</p>
     
        <button type="button" class="btn btn-success">MORE..</button>
      </div>
      <!-- <div class="col-lg-1"></div> -->
      <div class="col-lg-6">
    
        <img src="assets/img/gallery/img2.JPG" alt="" style="height: 400px; width: 95%;">
      </div>
    
    
    
      </div>
    </div>
    </div>
  
    </section>

<!-- registeration section -->
<section class="registration-section">
  <div class="emuinvent mt-5 ">
    <div class="container-fluid p-0  mb-5">
     <div class="row  mb-2">
      <div class="cl-xl-7 col-lg-12 col-md-10 col-sm-12">
    
        <div class="section-tittle text-center mb-70">
          <h5 class="first-heading">Registration</h5>

          
        </div>
      </div>
    </div>
   <div class="row register pt-5 ">
    <div class="col-lg-6  col-md-12 col-12 reg-text my-5">
<h2>Register here&nbsp;to join Dare 2 Design&nbsp;</h2>
<p>Parents can act as a mentor and may register the student/team by signing up to the <b style="color:#ffffff;">EMUiNVENT</b> site as "Mentor".&nbsp;</p>
    <br>
    </div>
    <div class="col-lg-2  col-sm-12 "><a href="register.php"><button type="button"  class="btn" >Register Now</button></a>
    </div> 
    <div class="kid-img">
      <img src="/assets/img/gallery/img-kid.png" alt="" srcset="" >
    </div>
   </div>
  
</div>
    </div>
  
    </div>
    
   
  
    </section>
<!-- Resources -->
    <section class="resources">
      <div class="row justify-content-center mb-2">
        <div class="cl-xl-7 col-lg-12 col-md-10 col-sm-12">
      
          <div class="section-tittle text-center mb-70">
            <h5 class="first-heading">SOME RESOURCES</h5>
            
          </div>
        </div>
      </div>
      <div class="row justify-content-center ">
     
      
        <div class="yt-video col-lg-8  col-sm-10   justify-content-center">
          <iframe   src="https://www.youtube.com/embed/P3NWaOcK1CY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
         </div>
      
      
      
      
        </div>
        <div class="resources-ul row mx-5 mt-5">
          <ul>
            <li><a title="Download the LogBook [PDF]." href="emuinvent_logbook.pdf" target="_blank">LogBook [PDF]</a> is used to document the innovation, design and development process that the students/team followed during the Dare 2 Design process.   </li>
            <br>
          <li>
               <p>Pitching Examples: These are some examples of presentation and pitches from past competitions. <b style="color:#2b873b;">EMUiNVENT</b> will conduct workshops and training on method of pitching ideas. Check "Important Dates" on our home page.</p>
               
           <ul>
                  <li><a title="View " soggy="" smelly="" shoe="" solution"="" youtube="" video="" page."="" href="https://www.youtube.com/watch?v=sA9DwvbQ-hI" target="_blank">View "Soggy Smelly Shoe Solution" Youtube video page.</a></li>
                  <li><a title="View " canope"="" youtube="" video="" page."="" href="https://www.youtube.com/watch?v=Q9RrHmSbQXM" target="_blank">View "Canope" YouTube video page.</a></li>
                  <li><a title="View " fidget="" art"="" youtube="" video="" page."="" href="https://www.youtube.com/watch?v=P3NWaOcK1CY" target="_blank">View "Fidget Art" YouTube video page.</a></li>
                  <li><a title="Download the EMUiNVENT Flyer [PDF]." href="emuinvent_flyer_2020.pdf" target="_blank">Download the <b style="color:#2b873b;">EMUiNVENT</b> Flyer.</a></li>
     
                </ul>
            </li>
         </ul>
        </div>
    </section>
  

   
  <!-- style="border: 2px solid;" -->
  

 


  <footer style=" margin-bottom: 0;">
    <div class="footer ">

      <div class="footer-area footer-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="single-footer-caption mb-30">

                  <div class="footer-logo mb-35">
                    <a href="index-2.html"><img src="assets/img/logo/Dare2Design.png" alt=""></a>
                  </div>
                  <div class="footer-tittle">
                    <div class="footer-pera">
                      <p>The automated process starts as soon as your clothes go into the machine.</p>
                    </div>
                  </div>

                  <div class="footer-social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Our solutions</h4>
                  <ul>
                    <li><a href="#">Design & creatives</a></li>
                    <li><a href="#">Telecommunication</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Programing</a></li>
                    <li><a href="#">Architecture</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Company</h4>
                  <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Review</a></li>
                    <li><a href="#">Insights</a></li>
                    <li><a href="#">Programing</a></li>
                    <li><a href="#">Carrier</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>Contact us</h4>
                  <ul>
                    <li><a href="#"><span class="__cf_email__"
                          data-cfemail="caa9a5a4b9bfa6bea5f3f28aada7aba3a6e4a9a5a7">[email&#160;protected]</span></a>
                    </li>
                    <li><a href="#">76/A, Green road, NYC</a></li>
                    <li class="number"><a href="#">(80) 783 367-3904</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom-area">
        <div class="container-fluid">
          <div class="footer-border">
            <div class="row align-items-center">
              <div class="col-xl-12 ">
                <div class="footer-copy-right">
                  <p>
                    Copyright &copy;
                    <script data-cfasync="false"
                      src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
                    made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                      target="_blank">Colorlib</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>




  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>








  <!-- <script src="assets/js/main.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>


  <!-- <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
  <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a9cee86ac5e3e23","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script> -->



  <script>
//    $(document).ready(function() {
//   $(window).scroll(function() {
//     var scrollTop = $(this).scrollTop();
//     // $('.page-banner').css('background-position', 'center ' + scrollTop / 50 + 'px');
//   });
// });
  </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/consulto/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 10:53:39 GMT -->

</html>