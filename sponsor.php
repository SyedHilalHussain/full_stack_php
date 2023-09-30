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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <style>
  
    @import url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/library.less");
    @import url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/variables.less");
    @import url("https://fonts.googleapis.com/css2?family=Eczar:wght@500;800&family=Ultra&display=swap");

    /* video css */
    .container-fluid {
      /* text-align: center; */
      /* width: 100%; */
      margin: 0;
      padding: 0;

    }

   
    .body {
      background-color: white;
      bottom: 0;
      padding: 15px;
      position: absolute;
      width: 100%;
    }



   
   


   /* sponsor page testimonial */

   .testimonial1{
    background-image: url("/assets/img/gallery/testimonial-bg.png")!important;
    background-size: cover;
    width: 100%;
    margin: 0;
    padding: 0;
    border: 0.05rem solid #05e22a;
    border-radius: 10px;
   }
   .testimonial-heading{
    margin-bottom: 50px;
    margin-top: 0;
    font-family: 'Eczar',sans-serif;
    font-size:3.5rem;
   }
    .testimonial-bg{
        /* border: 10px solid hsl(112, 59%, 44%); */
        padding: 30px 70px;
        
        text-align: center;
        position: relative;

       
    }
    .testimonial-bg:before{
        content: "\f10d";
        font-family: "fontawesome";
        width: 75px;
        height: 75px;
        line-height: 75px;
        background: #fff;
        text-align: center;
        font-size: 50px;
        color:#054510;
        position: absolute;
        top: -40px;
        left: 2%;

    }
    .testimonial{
        padding: 0 15px;
    }
    .testimonial .description{
        font-size: 20px;
        font-weight:400;
        font-style: italic;
        color: #848484;
        line-height: 30px;
        padding-bottom: 25px;
        margin-bottom: 15px;
        position: relative;
    }
    .testimonial .description:before{
        content: "";
        width: 75%;
        border-top: 1px solid #ddd;
        margin: 0 auto;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .testimonial .description:after{
        content: "";
        width: 20px;
        height: 20px;
        background: #fff;
        position: absolute;
        bottom: -10px;
        left: 50%;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
        transform: translateX(-50%) rotate(45deg);
    }
    .testimonial .pic{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 25px auto;
        overflow: hidden;
    }
    .testimonial .pic img{
        width: 100%;
        height: auto;
    }
    .testimonial .title{
        display: inline-block;
        font-size: 23px;
        font-weight: 700;
        color: #848484;
        text-transform: capitalize;
        margin: 0;
    }
    .testimonial .post{
        display: inline-block;
        font-size: 20px;
        color: #848484;
    }
    #testimonial-slider .owl-nav{
        
        margin-top: 10px;
        position: absolute;
        bottom: -34%;
        right: 0;
    }
    #testimonial-slider .owl-nav button{
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50%;
        /* background: #34363b; */
        opacity: 1;
        padding: 0;
        
    }
    .owl-prev:before,
    .owl-next:before{
        content: "\f104";
        font-family: "fontawesome";
        font-size: 23px;
        font-weight: 700;
        color: rgba(2, 98, 7, 0.88);
        
    }

    .owl-next:before{
        content:"\f105";
    }
    @media only screen and (max-width:767px){
        .testimonial-bg{ padding: 50px 40px; }
        /* .owl-theme .owl-controls{ bottom: -22%; } */
        .testimonial1{
            width: 80%;
            margin: 40px;
        }
        .testimonial-heading{
          font-size: 3rem;
        }
    }
    @media only screen and (max-width:480px){
        .testimonial-bg:before{
            width: 55px;
            height: 55px;
            line-height: 55px;
            font-size: 40px;
        }
        .testimonial-bg{ padding: 30px 10px; }
        .owl-theme .owl-controls{ bottom: -15%; }
    }
    @media only screen and (max-width:360px){
        .testimonial .title,
        .testimonial .post{
            font-size: 16px;
        }
        .owl-theme .owl-controls{ bottom: -12%; }
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

<!-- banner code -->
  <section class="main banner-section border">
   

    <div class="container-fluid page-banner" >
      <div class="banner-text d-flex align-items-center justify-content-center">
        Sponsors & Partners
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
          <h5 class="first-heading">OUR PARTNERS</h5>
          
        </div>
      </div>
    </div>
   
    <div class="row ">
      
      <div class="col-lg-6 mb-3 mb-lg-0 pt-5">
        
        <p class="poster-discription text-justify pt-5">
            We would like to thank our sponsors "FORD COMMUNITY CORP", "EMU BRIGHT FUTURE"
             and "Henry Ford's Invention Convention" for their generous donations and 
             partnership.We need sponsors to help us in organizing and encouraging students to learn Innovation and Entrepreneurship. Interested in supporting the students? </p>
        <button type="button" class="btn btn-success mx-5 my-5">JOIN US</button>
      </div>
      <!-- <div class="col-lg-1"></div> -->
      <div class="col-lg-6">
    
        <img src="assets/img/gallery/img2.JPG" alt="" style="height: 400px; width: 95%;">
      </div>
    
    
    
      </div>
    </div>
    </div>
  
    </section>
<!-- testimonial section -->
<section>
    <div class="container p-0 ">
        <div class="row">
            <div class="col-md-8 col-lg-12  testimonial1 col-md-offset-2">
                <div class="testimonial-bg">
                  <h1 class="testimonial-heading">Check Out What Our Partners Says</h1>
                    <div id="testimonial-slider" class="owl-carousel owl-theme">
                      
                        <div class="testimonial">
                          
                            <p class="description">
                                <a href=""><i class=".fa-quote-left"></i></a>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at augue sed elit eleifend tempus. Etiam malesuada vulputate justo quis bibendum. Nam maximus ultricies rhoncus. Ut non felis vel enim dapibus.
                            </p>
                            <div class="pic">
                                <img src="images/img-1.jpg" alt="">
                            </div>
                            <h3 class="title">Williamson,</h3>
                            <span class="post">Web Developer</span>
                        </div>
 
                        <div class="testimonial">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at augue sed elit eleifend tempus. Etiam malesuada vulputate justo quis bibendum. Nam maximus ultricies rhoncus. Ut non felis vel enim dapibus.
                            </p>
                            <div class="pic">
                                <img src="images/img-2.jpg" alt="">
                            </div>
                            <h3 class="title">kristiana,</h3>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
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
   <div class="row register pt-5">
    <div class="col-lg-6  col-md-12 col-12 reg-text">
<h2>Register here&nbsp;to join Dare 2 Design&nbsp;</h2>
<p>Parents can act as a mentor and may register the student/team by signing up to the <b style="color:#ffffff;">EMUiNVENT</b> site as "Mentor".&nbsp;</p>
    <br>
    </div>
    <div class="col-lg-3 col-sm-12 "><a href="register.php"><button type="button"  class="btn" >Register Now</button></a></div> 
    
   </div>
   
    </div>
  
    </div>
    <!-- <div class="kid-img">
      <img src="/assets/img/gallery/img-kid.png" alt="" srcset="">
    </div> -->
   
  
    </section>
<!--Partners logos -->
<section class="brandlogo mb-5">
    <div class="container-fluid ">
        <div class="row justify-content-center mb-2">
            <div class="cl-xl-7 col-lg-12 col-md-10 col-sm-12">
          
              <div class="section-tittle text-center mb-70">
                <h5 class="first-heading">OUR PARTNERS LOGOS</h5>
                
              </div>
            </div>
          </div>

      <div id="carousel3" class="owl-carousel row p-0  m-0"  >
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        <img src="assets/img/gallery/brandlogo.png" alt="brandlogo" class="brand-logo">
        </div>

    </div>

  </section>
  
  

   
  <!-- style="border: 2px solid;" -->
  

 


  <?php

include 'footer.php';

?>

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
   $(document).ready(function() {
 $('#carousel3').owlCarousel({
    loop: true,
        lazyLoad:true,
        nav:false,
        autoplay: true,
        margin:10,
       
        autoplayHoverPause: true,
        autoplaySpeed:5500,
        aotuplaytimeout: 100,
        items: 5,
        slideTransition:'linear',
        stagePadding: 100,


      });
$("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1000,1],
            itemsDesktopSmall:[979,1],
            itemsTablet:[768,1],
            pagination:false,
            nav:true,
            navText:["",""],
            autoPlay:true,
        });      
});
  </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/consulto/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 10:53:39 GMT -->

</html>