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
  
  <style>
    @import url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/library.less");
    @import url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/variables.less");
    @import url("https://fonts.googleapis.com/css2?family=Eczar:wght@500;800&family=Ultra&display=swap");



   



   

    .body {
      background-color: white;
      bottom: 0;
      padding: auto;
      position: absolute;
      width: 100%;
      margin: auto;
    }



    


   


   



     


    

    /* navbar and slider space fixing */
    @media (min-width: 700px) {

      .main-body-work {
        margin-top: 20px;

      }
    }

    /* poster css */
    .poster-container {
     
      background-color:rgba(5, 252, 55, 0.223);;
     /* width: 80%!important; */
     padding: 2% 10%!important;
      justify-content: center;

    }

   .emuinvent h1 {
      font-size: 30px;
      font-family: 'Eczar', serif;
      letter-spacing: 5px;
      font-style: italic;
      font-weight: 800;
    }

    .poster-discription {
     
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

<?php 
 
 include 'header.php';

?>
 <!-- body work start first heading -->
 <section class="main main-body-work">
<div class="container  mb-5">
 <div class="row justify-content-center mb-2">
  <div class="cl-xl-7 col-lg-12 col-md-10 col-sm-12">

    <div class="section-tittle text-center mb-70">
      <h5 class="first-heading">We Are Invention Education</h5>
      
    </div>
  </div>
</div>
<div class="emuinvent mt-5 ">
<div class="row ">
  
  <div class="col-lg-5 mb-3 mb-lg-0">
    
    <p class="poster-discription">
      Provides students in 3-12 an interactive and interdisciplinary opportunity to use the
      invention process to create and pitch an original product at a state-wide convention.
      Students will build their critical thinking and entrepreneurial skills and may qualify to
      compete at Invention Convention Michigan. Lorem ipsum dolor sit, amet consectetur adipisicing
       elit. Enim sit vitae corrupti, beatae rerum, debitis voluptate similique, iste aspernatur distinctio
        odit incidunt molestias explicabo facilis fugiat natus cumque voluptatibus maiores?
    </p>
    <button type="button" class="btn btn-success">MORE..</button>
  </div>
  <div class="col-lg-1"></div>
  <div class="col-lg-6">

    <img src="assets/img/gallery/img2.JPG" alt="" style="height: 400px; width: 95%;">
  </div>



  </div>
</div>
</div>
</section>


  <section class="poster">
    <div class="emuinvent" class="mb-5 justify-content-center">
      <!-- style="border: 2px solid;" -->
      <div class="container-fluid poster-container " >
        <div class="row mt-5">
          <div class="col-lg-5 mb-3 mb-lg-0">
            <h1>OUR TEAM</h1>
            <p class="poster-discription">
              Provides students in 3-12 an interactive and interdisciplinary opportunity to use the
              invention process to create and pitch an original product at a state-wide convention.
              Students will build their critical thinking and entrepreneurial skills and may qualify to
              compete at Invention Convention Michigan.
            </p>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-5">

            <img src="assets/img/gallery/about-img1.png" alt="">




          </div>
        </div>


        <div class="row mt-5 mb-5">

          <div class="col-lg-5 order-2 order-lg-first">
            <div id="carousel1" class="owl-carousel  ">


              <img src="assets/img/gallery/about-img1.png" alt="">
              <img src="assets/img/gallery/blogs1.png" alt="">
              <img src="assets/img/gallery/about-img2.png" alt="">
              <img src="assets/img/gallery/date.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-2"></div>
          <div class="col-lg-5 order-1 order-lg-last mb-3 mb-lg-0">
            <h1>Our Philosophy</h1>
            <p class="poster-discription">
              An interactive and interdisciplinary opportunity for 3-12 students to follow the invention
              process to create a prototype for a regional competition.
            </p>
          </div>
        </div>

        <!-- section 2 end  -->

        <div class="row mt-5 mb-5">
          <div class="col-lg-5 mb-3 mb-lg-0">
            <h1>Our Pedagogy</h1>
            <p class="poster-discription">
              EMUiNVENT will be held virtually on March 11, 2022. Outstanding projects participate in the
              2022 <a href="https://inhub.thehenryford.org/icw/michigan/home/">Invention Convention
                Michigan</a> in April, 2022, organized by the <a href="https://www.thehenryford.org/">Henry Ford</a>.
            </p>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-5">
            <figure>
              <img src="assets/img/hero/h1_hero1.png" alt="">
            </figure>
          </div>
        </div>





      </div>
    </div>
  </section>

  <section class="event my-3">
    <div class="wrapper ">
      <h1>Some Great Event We Have Done</h1>

      <div class="owl-carousel carousel2  event-carousel-div">

        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container con1">
            <div class="front" style="background-image: url(assets/img/gallery/blogs1.png)">
              <div class="inner">
                <p>Diligord</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit
                  c.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container con1">

            <div class="front" style="url(https://unsplash.it/511/511/)">
              <div class="inner">
                <p>Rocogged</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit
                  c.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container con1">
            <div class="front" style="background-image: url(https://unsplash.it/502/502/)">
              <div class="inner">
                <p>Strizzes</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit
                  c.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container con1">
            <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
              <div class="inner">
                <p>Clossyo</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit
                  c.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col" ontouchstart="this.classList.toggle('hover');">
          <div class="container con1">
            <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
              <div class="inner">
                <p>Sohanidd</p>
                <span>Lorem ipsum</span>
              </div>
            </div>
            <div class="back">
              <div class="inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit
                  c.
                </p>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>

  </section>
  <!-- style="border: 2px solid;" -->
  <section class="team-area " >

    <div class="row justify-content-center">
      <div class="cl-xl-7 col-lg-8 col-md-10 col-sm-12">

        <div class="section-tittle text-center mb-70">
          <h1 class="mentorhead">Our Mentors</h1>
          <!-- <h2 style="font-family: "Muli", sans-serif;">Our Mentors</h2> -->
        </div>
      </div>
    </div>
    <div class="container teamcontainer  mb-5">
      <div class="owl-carousel carousel2  px-2">



        <div class="ms-2 me-2">
          <div class="card social-card ">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team1.png" alt="" class="card-img-top">

                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-caption">
                <h3><a href="#">Jacika Chouhan</a></h3>
                <p>Senior business consultant</p>
              </div>
            </div>



          </div>
        </div>
        <div class="ms-2 me-2">
          <div class="card social-card ">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team2.png" alt="">
                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-caption">
                <h3><a href="#">Dirluba Jahan</a></h3>
                <p>Senior business consultant</p>
              </div>

            </div>
          </div>
        </div>
        <div class="ms-2 me-2">

          <div class="card social-card ">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team3.png" alt="">
                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-caption">
                <h3><a href="#">Michel Frade</a></h3>
                <p>Senior business consultant</p>
              </div>

            </div>
          </div>
        </div>
        <div class="ms-2 me-2">

          <div class="card social-card">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team4.png" alt="">
                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-caption">
                <h3><a href="#">Kalisha Milano</a></h3>
                <p>Senior business consultant</p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="brandlogo my-3">
    <div class="wrapper ">
      <h1>Logos Of Our Partners</h1>

      <div id="carousel3" class="owl-carousel " >
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        </div>

    </div>

  </section>


 <?php 
  
  include "footer.php";

  ?>

  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>




  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>








  <!-- <script src="assets/js/main.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  


  <!-- <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
  <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a9cee86ac5e3e23","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script> -->



  <script>
    $(document).ready(function () {
      $('.carousel2').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        // autoplay:true,
        // autoplayhoverpause: true,
        // aotuplaytimeout:100,
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 1
          },
          1000: {
            items: 3
          }
        }

      });
      $('#carousel1').owlCarousel({
        loop: true,
        margin: 10,

        autoplay: true,
        autoplayhoverpause: true,
        aotuplaytimeout: 80,
        items: 1,

        animateOut: 'fadeOut',



      });
      $('#carousel3').owlCarousel({
        loop: true,
        lazyLoad:true,
        nav:false,
        autoplay: true,
        margin:10,
       
        autoplayhoverpause: true,
        autoplaySpeed:5500,
        aotuplaytimeout: 100,
        items: 5,
        slideTransition:'linear',
        stagePadding: 100,


      });
      const foldBtn = document.querySelector('.fold-btn');
      const folded = foldBtn.parentElement;
      const figcaption = folded.parentElement;
      if (window.matchMedia('(max-width: 668px)').matches) {
        figcaption.classList.add('closed');
        folded.classList.add('closed');
      }
      folded.addEventListener('click', function () {
        figcaption.classList.toggle('closed');
        folded.classList.toggle('closed');
      });
//       $(window).scroll(function() {
//   if ($(this).scrollTop() > 80) {
//     $('#navbar-1').fadeOut();
//   } else {
//     $('#navbar-1').fadeIn();
//   }
// });

// $(window).scroll(function() {
//   if ($(this).scrollTop() > $('#navbar-1').height()) {
//     $('#main-bar').addClass('fixed-top');
//     $('body').css('padding-top', $('#main-bar').height());
//     $('#main-bar').css('top', '0%');
//   } else {
//     $('#main-bar').removeClass('fixed-top');
//     $('body').css('padding-top', '0');
//     $('#main-bar').css('top', '6.5%');
  
//   }
// });

    });
  </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/consulto/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 10:53:39 GMT -->

</html>