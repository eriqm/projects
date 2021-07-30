<?php 

include('new 2.php');
if(isset($_POST['submit']))
{
 $email= $_POST['email'];
 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $pincode=$_POST['pincode'];
 
$result = "insert into paint (email,name, mobile, pincode) 
VALUES 
('$email','$name','$mobile','$pincode')";


if(mysqli_query($con,$result))
  {
  echo "<script>alert('successfully inserted');</script>";
  echo "<script>window.location.href='index.php'</script>";
  }
  else{
  echo "<script>alert('error');</script>";
  
 }
}

?>
<?php 

//include('new 2.php');
if(isset($_POST['submit1']))
{
 $email= $_POST['email'];
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	   echo "<script>alert('Please enter valid email-id');</script>";
    }
	else
	{
$result = "insert into sign_up (email_id) 
VALUES 
('$email')";
if(mysqli_query($con,$result))
  {
    echo "<script>alert('Subscribed successfully');</script>";
   echo "<script>window.location.href='index.php'</script>";
  }
  else{
  echo "<script>alert('error');</script>";
  
 }
}
}

?>



<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Royal Paints | Makes your life royal</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
<meta name="title" content="About Royal Paints - Residential &amp; Commercial Painting Services">
<meta name="keywords" content="residential painting, home painting, Royal paints">
<meta name="description" content="Royal Paint has been a trusted brand in residential &amp; home painting for over 7 years being Thika, Kenya&#39;s largest &amp; Royal&#39;s third largest painting company. Know more about us!">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="css/settings.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color Defult -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favi.png" />


  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/smooth-scroll.js"></script>
  <script type="text/javascript" src="js/skrollr.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>    

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
              <!--  <li><a href="#"> Homeowners</a>
                </li>
                <li><a href="#"> Professionals</a>
                </li>
                <li><a href="#"> Large Projects</a>
                </li>
                <li><a href="#"> Kitchens</a>
                </li>
                <li><a href="#"> Bath Division</a>
                </li>
                <li><a href="#"> Global</a>
                </li>--->                
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="itl-tooltip" data-placement="bottom" title="Call or Whatsapp us on" href="Tel:+254 733 200 200 / +254 787 500 500"><i class="fa fa-phone"> &nbsp; Tel:+254 733 200 200 / +254 787 500 500</i></a>
                </li>
                <li>
                  &nbsp;
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->
      <div class="clearfix"></div>

      <!-- Start  Logo & Navigation  -->

      <a class="navbar-brand" href="index.php">
              <img alt="" src="images/real2.png" class="top_fixed_logo" align="navbar-right">
            </a>
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            
          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="index.php">Home</a>
              </li>
              <li>
                <a href="Products.php">Find Products</a>
              </li>
              <li>
                <a href="Why-Royel-Paints.php">Why Royal Paints</a>
              </li>
              <li>
                <a href="about.php">About us</a>
              </li>
              <li>
                <a href="Service.php">Service</a>
              </li>
              <li>
                <a href="blog.php">Blog</a>
              </li>
              <li><a href="imatch.php">imatch</a>
              </li>

              <li><a href="contact.php">Contact</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.php">Home</a>
          </li>
          <li>
            <a href="Products.php">Find Products</a>
          </li>
          <li>
            <a href="Why-Royel-Paints.php">Why Royal Paints</a>
          </li>
          <li>
            <a href="about.php">About Us</a>
          </li>
          <li>
            <a href="Service.php">Service</a>
          </li>
          <li>
            <a href="blog.php">Blog</a>
          </li>
          <li><a href="imatch.php">imatch</a>
          </li>

          <li><a href="contact.php">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->
    <div class="clearfix"></div>
    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
          <li data-target="#main-slide" data-slide-to="3"></li>
          <li data-target="#main-slide" data-slide-to="4"></li>
          <li data-target="#main-slide" data-slide-to="5"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/s1.jpeg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <!-- <span>Welcome to <strong>Margo</strong></span> -->
                </h2>
                <h3 class="animated3">
                 <!-- <span>The ultimate aim of your business</span> -->
               </h3>
               <!-- <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a>  -->
               </p>
             </div>
           </div>
         </div>
         <!--/ Carousel item end -->
         <div class="item">
          <img class="img-responsive" src="images/slider/s2.JPEG" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated4">
                <!-- <span><strong>Margo</strong> for the highest</span> -->
              </h2>
              <h3 class="animated5">
                <!-- <span>The Key of your Success</span> -->
              </h3>
              <!-- <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Buy Now</a> -->
              </p>
            </div>
          </div>
        </div>
        <!--/ Carousel item end -->
        <div class="item">
          <img class="img-responsive" src="images/slider/s3.jpeg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                <!-- <span>The way of <strong>Success</strong></span> -->
              </h2>
              <h3 class="animated8 white">
                <!-- <span>Why you are waiting</span> -->
              </h3>
              <div class="">
                <!-- <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="img-responsive" src="images/slider/s4.jpeg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                <!-- <span>The way of <strong>Success</strong></span> -->
              </h2>
              <h3 class="animated8 white">
                <!-- <span>Why you are waiting</span> -->
              </h3>
              <div class="">
                <!-- <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a> -->
              </div>
            </div>
          </div>
        </div>



        <div class="item">
          <img class="img-responsive" src="images/slider/.jpeg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                <!-- <span>The way of <strong>Success</strong></span> -->
              </h2>
              <h3 class="animated8 white">
                <!-- <span>Why you are waiting</span> -->
              </h3>
              <div class="">
                <!-- <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="img-responsive" src="images/slider/.jpeg" alt="slider">
          <div class="slider-content">
            <div class="col-md-12 text-center">
              <h2 class="animated7 white">
                <!-- <span>The way of <strong>Success</strong></span> -->
              </h2>
              <h3 class="animated8 white">
                <!-- <span>Why you are waiting</span> -->
              </h3>
              <div class="">
                <!-- <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a> -->
              </div>
            </div>
          </div>
        </div>

        <!--/ Carousel item end -->
      </div>
      <!-- Carousel inner end-->

      <!-- Controls -->
    </div>
    <!-- /carousel -->
  </section>
  <!-- End Home Page Slider -->
  <div class="clearfix"></div>
  <!-- Start Services Section -->
  <div class="section service">
    <div class="container">
      <div class="row">

        <!-- Start Service Icon 1 -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
          <h1 class="heading_create">Create Your Dream home in 4 Easy Steps</h1>
          <span class="orange-line-30"></span>
        </div>
        <!-- End Service Icon 1 -->

        <div class="row">
          <div class="col-xs-12">
            <div class="sleek-fourSec">
              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" data-animation="fadeIn" data-animation-delay="01">
                <div class="sleek-txtnum">1</div>
                <div class="sleek-tabcontent">
                  <div class="sleek-tabHeading">Get in Touch</div>
                  <div class="sleek-tabdisp">Fill the form below to book a free site visit by our expert</div>
                </div>

              </div>

              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" data-animation="fadeIn" data-animation-delay="01">
                <div class="sleek-txtnum">2</div>
                <div class="sleek-tabcontent">
                  <div class="sleek-tabHeading">Visualize</div>
                  <div class="sleek-tabdisp">Get Advice on Colours, designs, materials and budget</div>
                </div>

              </div>


              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" data-animation="fadeIn" data-animation-delay="01">
                <div class="sleek-txtnum">3</div>
                <div class="sleek-tabcontent">
                  <div class="sleek-tabHeading">Personalize</div>
                  <div class="sleek-tabdisp">Choose the service most suited for you. Be it Painting, Wood Polishing or Waterproofing</div>
                </div>

              </div>


              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" data-animation="fadeIn" data-animation-delay="01">
                <div class="sleek-txtnum">4</div>
                <div class="sleek-tabcontent">
                  <div class="sleek-tabHeading">Experience</div>
                  <div class="sleek-tabdisp">Sit Back and Relax while we create your Dream Home, On Time and with a lot of Care!</div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <form id="forms" method="POST">
            <div class="col-xs-12">
              <div class="sleek-designhome">
                <h3 class="text-center login-brder mb-25 custom-sleek-designhome-title">Enquire Now</h3>
                <ul class="clearfix">
                  <li>
                    <div class="login-input">
                      <input name="Name" id="fullname" placeholder="Name" type="text" nvform="90"  required>
                    </div>
                  </li>
                  <li>
                    <div class="login-input">
                      <input name="Email" id="email" placeholder="Email" type="email" nvform="90" required>
                    </div>
                  </li>
                  <li>
                    <div class="login-input">
                      <input name="mobile" id="mobileNo" maxlength="10" placeholder="Mobile"  type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  title="Please enter exactly 10 digits" nvform="90" required>
                    </div>
                  </li>
                  <li>
                    <div class="login-input">
                      <input name="pincode" id="pincode"  maxlength="6" placeholder="Pincode" type="text" pattern="[0-9]{3}[0-9]{3}"  title="Please enter exactly 6 digits" nvform="90"  required>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-xs-12 text-center custom-thankyou submit_cc">
			<button type="submit" name="submit" class="sleek-btn ap-submit-button">Submit</button>
              <!--<a href="#" class="sleek-btn ap-submit-button" name="submit">Submit</a>--->
            </div>
            <div class="col-xs-12">
              <div class="sleek-heading text-center sleek-thank-you-box" style="display: none;">
                <h2 class="mb-none">thank you</h2>
                <span class="sleek-orange-line"></span>
                <div class="sleek-thankyou-msg thankyoumesg"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </div>
  <!-- End Services Section -->

  <div class="clearfix"></div>


  <!-- Start Portfolio Section -->
  <div class="section section_1">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service-box service-center animated fadeIn delay-01" data-animation="fadeIn" data-animation-delay="01" id="secrvice_paint">
          <h1 class="heading_create">featured products</h1>
          <span class="orange-line-31"></span>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 photo_gel_royal">

          <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
            <!-- Testimonial 1 -->
            <div class="classic-testimonials item">
              <img class="img-responsive" src="images/slider/divider1.jpg" alt="slider">
              <h2 class="heading_service-wall">Exterior Look - Royal Weather Guard Silicone</h2>
            </div>
            <!-- Testimonial 2 -->
            <div class="classic-testimonials item">
              <img class="img-responsive" src="images/slider/divider2.jpg" alt="slider">
              <h2 class="heading_service-wall">Royal Master Texture - Royal Master Texture Paint Pattern</h2>
            </div>
            <!-- Testimonial 3 -->
            <div class="classic-testimonials item">
              <img class="img-responsive" src="images/slider/divider3.jpg" alt="slider">
              <h2 class="heading_service-wall">Matt Finishes - Excellent Matt finish</h2>
            </div>
          </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
            <!-- Testimonial 1 -->
            <div class="classic-testimonials item">
              <img class="img-responsive" src="images/slider/divider2.jpg" alt="slider">
              <h2 class="heading_service-wall">Royal Master Texture - Royal Master Texture Paint Pattern</h2>
            </div>
            <!-- Testimonial 2 -->
            <div class="classic-testimonials item">
              <img class="img-responsive" src="images/slider/divider3.jpg" alt="slider">
              <h2 class="heading_service-wall">Matt Finishes - Excellent Matt finish</h2>
            </div>
            <!-- Testimonial 3 -->
            <div class="classic-testimonials item">
              <img class="img-responsive" src="images/slider/divider4.jpg" alt="slider">
              <h2 class="heading_service-wall">Royal Master Texture - Royal Master Texture Paint</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="clearfix"></div>

  <div class="section section_1">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 img_royal_head">
          <img class="img-responsive" src="images/slider/featured 2.jpg" alt="slider">
          <div class="homepage-products-small-section-content">
            <a href="#">
              <p class="global-para">Royal Silk Wash & Wear</p>
            </a>

            <span class="global-span">Bring your walls to life with Royal Vinyl Silk Wash & Wear</span>                    
          </div>
        </div>

        <div class="col-md-4 img_royal_head">
          <img class="img-responsive" src="images/slider/featured 1.jpg" alt="slider">
          <div class="homepage-products-small-section-content">
            <a href="#">
              <p class="global-para">Plain finishes</p>
            </a>
            <span class="global-span">Choose from a range of options for a smooth finsh</span>                    
          </div>
        </div>

        <div class="col-md-4 img_royal_head">
          <img class="img-responsive" src="images/slider/featured 3.jpg" alt="slider">
          <div class="homepage-products-small-section-content">
            <a href="#">
              <p class="global-para">Stencils</p>
            </a>
            <span class="global-span">Beautiful Patterns for Striking Walls</span>                    
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Testimonials Section -->


  <!-- Start Team Member Section -->
  <div class="section" id="section_end_to_end">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service-box service-center cc_line animated fadeIn delay-01" data-animation="fadeIn" data-animation-delay="01" id="secrvice_paint">
      <h1 class="heading_create">End-to-End Decor Solutions</h1>
      <span class="orange-line-32"></span>
    </div>
    <div class="container-fluid bg-container pt-0">

      <!-- Start Team Members -->
      <div class="container">
        <div class="row">

          <!-- Start Memebr 1 -->
          <div class="col-xs-12 col-sm-4 text-center mobile-decor-section">
            <div class="homepage-decor-section-content">    
              <a href="#">
                <img src="images/23.png" alt="23" style="display: block;">
              </a>

              <a href="/services/decor-solutions.html">
                <p class="global-para">Home Painting Services</p>
              </a>

              <span class="global-span">From choosing the right paint to getting an expert finish - leave it to us.</span>
            </div>
          </div>
          <!-- End Memebr 1 -->

          <!-- Start Memebr 2 -->
          <div class="col-xs-12 col-sm-4 text-center mobile-decor-section">
            <div class="homepage-decor-section-content">    
              <a href="#">
                <img src="images/7772682972_b110e17d17_b.png" alt="7772682972_b110e17d17_b" style="display: block;">
              </a>

              <a href="/services/decor-solutions.html">
                <p class="global-para">Colour Consultancy Online</p>
              </a>

              <span class="global-span">Want immediate advice from our colour experts? Let’s talk online!</span>
            </div>
          </div>
          <!-- End Memebr 2 -->

          <!-- Start Memebr 3 -->
          <div class="col-xs-12 col-sm-4 text-center mobile-decor-section">
            <div class="homepage-decor-section-content">    
              <a href="#">
                <img src="images/cicleicon.png" style="display: block;" alt="cicleicon">
              </a>

              <a href="/services/decor-solutions.html">
                <p class="global-para">Decor Solutions</p>
              </a>

              <span class="global-span">Get a complete home makeover done by best design professionals.</span>
            </div>
          </div>
          <!-- End Memebr 3 -->
        </div>
      </div>
      <!-- End Team Members -->
    </div>
    <!-- .container -->
  </div>
  <!-- End Team Member Section -->


  <!-- Start Pricing Table Section -->
  <div class=" section  hidden-xs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service-box cc_line  service-center animated fadeIn delay-01" data-animation="fadeIn" data-animation-delay="01" id="secrvice_paint">
      <h1 class="heading_create">Decide The Right Paint</h1>
      <span class="orange-line-32"></span>
    </div>
    <div class="container">
      <div class="row">
        <div class="tools-slider-new text-center">
          <div class="col-xs-3">   
            <a href="paint-budget-calculator.php">
              <img src="images/budget-calc-small.png.image.100.100.medium.png" style="display: inline;">                                            
              <p class="global-para">Paint Budget Calculator</p>
              <span class="global-span">Finalise a budget in just a few clicks, using our calculator.</span>
            </a>            
          </div>

          <div class="col-xs-3">   
            <a href="https://www.visualizecolor.com/">
              <img src="images/color-catalogue-icon.png.image.100.100.medium.png" style="display: inline;">                                            
              <p class="global-para">Color Catalogue</p>
              <span class="global-span">Explore over 1800 shades, textures and themes in our catalogue.</span>
            </a>            
          </div>   

          <div class="col-xs-3">   
            <a href="colour-visualiser.html">
              <img src="images/color-visualiser-small.png.image.100.100.medium.png" style="display: inline;">                                            
              <p class="global-para">Color Visualiser</p>
              <span class="global-span">See what your home could look like, before even painting it.</span>
            </a>            
          </div>

          <div class="col-xs-3">   
            <a href="paint-selector.html">
              <img src="images/paintSelector-icon.png.image.100.100.medium.png" style="display: inline;">                                            
              <p class="global-para">Paint Selector</p>
              <span class="global-span">Choosing the right paint for your home is now even simpler.</span>
            </a>            
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- End Pricing Table Section -->


  <!-- Start Client/Partner Section -->
  <div class="partner" id="partner_section_royal">
    <div class="container">
      <div class="row">

        <!-- Start Big Heading -->
        <div class="big-title text-center">
        </div>
        <!-- End Big Heading -->

        <!--Start Clients Carousel-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->
        <!-- Wrapper for slides -->
        




<!-- Start Team Member Section -->
<div class="section">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service-box service-center cc_line animated fadeIn delay-01" data-animation="fadeIn" data-animation-delay="01" id="secrvice_paint service_xx">
    <h1 class="heading_create">Trending at Royal Paints</h1>
    <span class="orange-line-31"></span>
  </div>
    <!-- Start Team Members -->
    <div class="container">
      <div class="row">

        <!-- Start Memebr 1 -->
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
          <div class="row">
          <div class="trending-video">
            <div class="trending-youtube-video lazyVideo" data-video="https://www.youtube.com/embed/CJGZ5tFwYSE" data-auto-load="false">
              <iframe frameborder="0" allowfullscreen="allowFullScreen" src="https://www.youtube.com/embed/CJGZ5tFwYSE?rel=0"></iframe></div>
              <div class="trending-video-content">
                <a href="#" class="pull-right">View All Videos</a>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="trending-section-layertwo global-mt-30">
              <div class="col-xs-12 col-sm-5 global-pl-0 mobile-mb-30 mobile-padding-0">


                <a href="#">
                  <div class="pink-box">

                    <p class="global-para">the largest research infrastructure.</p>


                    <span class="global-span">Take a tour of our newest R&amp;D centre in Turbhe</span>

                  </div>
                </a>

                <div class="trending-section-box-images text-right global-mt-50 hidden-xs">
                  <img src="images/side-small-box.png" style="display: inline;">
                </div>
                <!--end of trending-section-box-images-->
              </div>

              <div class="col-xs-12 col-sm-7 global-pr-0 mobile-padding-0">



                <a href="#" target="_blank">

                  <img src="images/pallet-300x300.jpg" style="display: inline;">

                </a>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          </div>
          <div class="col-xs-12 col-sm-5 homepage-trending-section-content">
            <div class="trending-section-box-images hidden-xs">
              <img src="images/side-big-box1.png" style="display: inline;">
            </div>
            <!--end of trending-section-box-images-->
            <div class="row">
              <div class="col-xs-12 global-padding-0 trending-section-box-images global-mt-30">
                <a href="#">
                  <img src="images/image-other-768x614.jpg" style="display: inline;">
                </a>
              </div>
            </div>
            <!--end of trending-section-box-images-->

            <div class="clearfix"></div>

            <div class="trending-section-box-images global-mt-30 hidden-xs">
              <img src="images/side-big-box2.png" style="display: inline;">
            </div>
            <!--end of trending-section-box-images-->
          </div>


        </div>
      </div>
  </div>





          <div class="hr1" style="margin-bottom:50px;"></div>
      </div>
    </div>
    <!-- End content -->


    <!-- Start Footer Section -->
<span class="orange-line-60"></span>
<footer class="section footer-classic context-dark bg-image" style="background: #FFE5B4;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/tell.png" ></a>
                <font color="black"> 
                <p>
                  <font color="black"> 
                  Royal Paints is a home grown Kenyan entity which brings together experts with vast experience in the decorative and architectural coatings industry. We are a company committed to manufacturing, marketing and distributing paint and coatings which deliver the best in product performance to suit your every need.
                  <font color="black"> 
                </p>
                <br>
                <!-- Rights-->
                <font color="black"> 
                <p><font color="black"> 
                  <span>©  </span><span class="copyright-year">2020</span><span> </span><span>Royal Paints Industries Limited</span><span> - </span><span>All Rights Reserved.</span>
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>P.O.BOX.31002-00600<br>SUNRISE SYNTHETIC COMPOUND, DELMONTE ROAD<br> Thika - Makongeni</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">info@royalpaints.co.ke</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>call us on:</dt>
                <dd><a href="tel:#">+254 733 200 200 / +254 787 500 500</a> <span>or whatsapp us on</span> <a href="tel:#">+254 785 220 220</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="social">
  <div id="social">
  <div class="container">
    <div class="row centered">
                    <div class="col-lg-2">
          <a href="url" title="Facebook" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
        </div>
                <div class="col-lg-2">
          <a href="url" title="twitter" target="_blank">
            <i class="fa fa-twitter"></i>
          </a>
        </div>
                <div class="col-lg-2">
          <a href="url" title="skype" target="_blank">
            <i class="fa fa-skype"></i>
          </a>
        </div>
                <div class="col-lg-2">
          <a href="url" title="instagram" target="_blank">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
            </div><!-- --/row ---->
  </div><!-- --/container ---->
</div>


      </footer>