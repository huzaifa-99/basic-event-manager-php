<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <?php
        session_start();
        if(isset($_SESSION['admin_id']) && $_SESSION['admin_id']!==""){
            header("location: admin/index.php");
        }
    ?>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--Setting the viewport to make the website look good on all devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Setting the Keywords for browsers search engines-->
    <title>E-Manager</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <!--Jquery Easing Library requirements start-->
    <!--order of jquery fuction and cdn is first cdn then function important-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="jqueryScrollTolibrary-downloadedseperately/jquery.scrollTo.js"></script>  
    <script type="text/javascript" src="jqueryScrollTolibrary-downloadedseperately/functionforeasing.js"></script>
    <!--Jquery Easing Library requirements end-->
    <!--Fontawesome fonts link start-->
    <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">
    <!--Fontawesome fonts link end-->

    <style type="text/css">
        .ope{padding:8px 26px;cursor: pointer;font-size: 20px;background:#0181F5;display: inline-block;color: white;border: 2px solid #ffffff;transition: 0.5s ease;}
        .ope:hover{border:2px solid #0181F5 !important;background:transparent !important;color:#0181F5 !important; }
        .bir{padding:8px 26px;cursor: pointer;font-size: 20px;background:#886CFE;display: inline-block;color: white;border: 2px solid #ffffff;transition: 0.5s ease;}
        .bir:hover{border:2px solid #886CFE !important;background:transparent !important;color:#886CFE !important; }
        .cor{padding:8px 26px;cursor: pointer;font-size: 20px;background:#000000;display: inline-block;color: white;border: 2px solid #ffffff;transition: 0.5s ease;}
        .cor:hover{border:2px solid #000000 !important;background:transparent !important;color:#000000 !important; }
        .tri{padding:8px 26px;cursor: pointer;font-size: 20px;background:#10c21e;display: inline-block;color: white;border: 2px solid #ffffff;transition: 0.5s ease;}
        .tri:hover{border:2px solid #10c21e !important;background:transparent !important;color:#10c21e !important; }
        .wed{padding:8px 26px;cursor: pointer;font-size: 20px;background:red;display: inline-block;color: white;border: 2px solid #ffffff;transition: 0.5s ease;}
        .wed:hover{border:2px solid red !important;background:transparent !important;color:red !important; }
        .custombook{padding:8px 26px;cursor: pointer;font-size: 20px;background:grey;display: inline-block;color: white;border: 2px solid #ffffff;transition: 0.5s ease;}
        .custombook:hover{border:2px solid grey !important;background:transparent !important;color:grey !important; }
        .loadmorebutton:hover{background-color: black !important;color:white !important;}
        #myBtn {
              display: none; /* Hidden by default */
              position: fixed; /* Fixed/sticky position */
              bottom: 20px; /* Place the button at the bottom of the page */
              right: 30px; /* Place the button 30px from the right */
              z-index: 99; /* Make sure it does not overlap */
              border: none; /* Remove borders */
              outline: none; /* Remove outline */
              background-color: #FF6550; /* Set a background color */
              color: white; /* Text color */
              cursor: pointer; /* Add a mouse pointer on hover */
              padding: 10px; /* Some padding */
              border-radius: 10px; /* Rounded corners */
              font-size: 18px; /* Increase font size */
        }
        #myBtn:hover {
          background-color: #555; /* Add a dark-grey background on hover */
        }
    </style>
    
</head>

<body>  


    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <style type="text/css">
        .navbartopcolor{
            color: #ffffff !important;
        }
    </style>
    <script type="text/javascript">
        
    </script>
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area sticky">
                <div class="container-fluid p-0">

                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <h3 style="color: #ffffff;float: left;">E-Manager</h3>
                                   <!--<img id="imgcolor" src="img/abcd.png" alt="">-->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="nav_ul_class">
                                        <li><a id="navtopcolorblack1" class="active" href="index.php">Home</a></li>
                                        <li><a id="navtopcolorblack2" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Booking</a></li><!--$('html').animate({scrollTop: '200px'});-->
                                        <li><a id="navtopcolorblack3" href="#services_area" onclick="$.scrollTo('#services_area',500,{step:function(){}});">Services <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <!--<li><a href="blog.html">Wedding</a></li>
                                                <li><a href="single-blog.html">Opening Ceremony</a></li>
                                                <li><a href="single-blog.html">Birthday Party</a></li>
                                                <li><a href="single-blog.html">Corporate Business</a></li>
                                                <li><a href="single-blog.html">Arrange A Trip</a></li>-->
                                                <li><a href="#">Wedding</a></li>
                                                <li><a href="#">Opening Ceremony</a></li>
                                                <li><a href="#">Birthday Party</a></li>
                                                <li><a href="#">Corporate Business</a></li>
                                                <li><a href="#">Arrange A Trip</a></li>
                                            </ul>
                                        </li>
                                        <li><a id="navtopcolorblack4" href="#gallery_area" onclick="$.scrollTo('#gallery_area',1600,{queue:true});">Gallery <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <!--<li><a href="elements.html">Wedding</a></li>
                                                <li><a href="elements.html">Opening Ceremony</a></li>
                                                <li><a href="single-blog.html">Birthday</a></li>
                                                <li><a href="single-blog.html">Business</a></li>
                                                <li><a href="single-blog.html">Trips</a></li>-->
                                                <li><a href="#">Wedding</a></li>
                                                <li><a href="#">Opening Ceremony</a></li>
                                                <li><a href="#">Birthday</a></li>
                                                <li><a href="#">Business</a></li>
                                                <li><a href="#">Trips</a></li>
                                            </ul>
                                        </li>
                                        <!--<li><a href="Support.html">Support</a></li>-->
                                        <!--<li><a id="navtopcolorblack5" href="about.html">About</a></li>-->
                                        <!--<li><a id="navtopcolorblack6" href="contact.html">Contact</a></li>-->
                                        <li><a id="navtopcolorblack6" href=#">Contact</a></li>
                                        <li><a id="navtopcolorblack6" href="#services_area" onclick="$.scrollTo('#search_area',1600,{queue:true});">Search</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <?php
                        if(!isset($_SESSION['email']) || $_SESSION['email']==""){
                            echo '';
                        ?>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#test-form" id="navbartopiconcolor" class="login popup-with-form">
                                    <i class="flaticon-user" id="navbartopiconcolor1"></i>
                                    <span>log in</span>
                                </a>
                            </div>
                        </div>
                        <?php
                        '';}
                        else if(isset($_SESSION['email']) && $_SESSION['email']!==""){
                            echo '';
                        ?>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block nav-item dropdown">
                            <div class="log_chat_area d-flex align-items-center">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;padding:0rem 1rem;">
                                <img id="imgcolor" src="img/profilepic/<?=$_SESSION['profile_image']?>" style="height: 39px;width: 39px;border-radius: 50%;margin:0px;padding: 0px;" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="logout.php">
                                    <button class="dropdown-item">
                                    Logout
                                    </button></a>
                                                           
                                    <a class="dropdown-item" href="signup.php">Settings</a>                          
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item mx-1" href="#">About Us</a> 
                                </div>
                            </div>
                        </div>
                        <?php
                        '';}
                        ?>


                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <style type="text/css">
        .xyzz:hover{
            background-color: transparent !important;
            border:2px solid white !important;
            color: white !important;
        }
    </style>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2" style="height: 100vh;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <h3 style="color: #ffffff;margin-bottom: 10px !important;background: rgba(0,0,0,0.2) !important;">Better events.Together!</h3>
                            <p style="color: #ffffff;margin-bottom: 10px !important;">Plan For The unplanable with the world most collaborative events plateform.</p>
                            <div class="find_dowmain">
                                <a onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">
                                <button class="xyzz" style="background: white;border:2px solid white;padding:8px;padding-right:50px;padding-left:50px;color: #000000;font-size: 22px;transition: 0.5s ease;">Book Your Event</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- prising_area_start -->
    <div class="prising_area" id="services_area" style="padding-bottom: 0px;">
        <div class="container" style="">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            <span style="background:#fff;padding:0 30px;">
                            Our Event Management Services
                            </span>
                        </h3>
                        <p>We Know That A moment Cannot Be Relived Again And Thats Why<br>
                            We Make Sure That You Enjoy The Best Of Every Moment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--<div class="col-xl-12 col-md-12 col-lg-12 service_box">
                    <div class="single_prising col-xl-4 col-md-4 col-lg-4" style="padding: 50px;">-->
                <div class="col-xl-4 col-md-6 col-lg-6"><!--service-box ki class yahan thi-->
                    <div class="single_prising col-xl-12 col-md-12 col-lg-12 service_box" style="padding: 50px;">
                        <div class="prising_icon blue" style="padding: 20px 20px 20px 0;">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h3>Opening Ceremony</h3>
                        <p class="prising_text">Have Full Control Of All Manageable Aspects Including Reception,Catering And Seating.<a href="" style="color: grey;">Get Details</a></p>
                        <p class="prise">Starting from <span>Rs.50,000</span></p>
                        <a class="ope" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Book Now</a>
                    </div>
                    <!----
                    <div class="single_prising col-xl-8 col-md-8 col-lg-8 leftone">
                        <div class="prising_icon blue" style="padding: 20px 20px 20px 0;">
                            <h3>Description</h3>
                        </div>
                        <p class="prising_text">All The Description Here</p>
                    </div>---->
                </div>
                <!--<div class="col-xl-12 col-md-12 col-lg-12 service_box">
                    <div class="single_prising col-xl-4 col-md-4 col-lg-4" style="padding: 50px;">-->
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_prising col-xl-12 col-md-12 col-lg-12 service_box" style="padding: 50px;">
                        <div class="prising_icon lite_blue" style="padding: 20px 20px 20px 0;">
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                        <h3>Birthday Party</h3>
                        <p class="prising_text">Have A Memorable Birthday With Your Loved One's leaving the Heafty Work To Us.<a href="" style="color: grey;">Get Details</a></p>
                        <p class="prise">Starting from <span>Rs.10,000</span></p>
                        <a class="bir" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Book Now</a>
                    </div>

                    <!----<div class="single_prising col-xl-8 col-md-8 col-lg-8 leftone">
                        <div class="prising_icon lite_blue" style="padding: 20px 20px 20px 0;">
                            <h3>Description</h3>
                        </div>
                        <p class="prising_text">All The Description Here</p>
                    </div>---->
                </div>
                <!--<div class="col-xl-12 col-md-12 col-lg-12 service_box">
                    <div class="single_prising col-xl-4 col-md-4 col-lg-4" style="padding: 50px;">-->
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_prising col-xl-12 col-md-12 col-lg-12 service_box" style="padding: 50px;">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Corporate Events</h3>
                        <p class="prising_text">Not Much Time ?. We Provide You With Professional Arrangements For Bussiness Dealings.<a href="" style="color: grey;">Get Details</a></p>
                        <p class="prise">Starting from <span>Rs.100,000</span></p>
                        <a class="cor" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Book Now</a>
                    </div>
                    <!----<div class="single_prising col-xl-8 col-md-8 col-lg-8 leftone">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;">
                            <h3>Description</h3>
                        </div>
                        <p class="prising_text">All The Description Here</p>
                    </div>---->
                </div>
                <!--<div class="col-xl-12 col-md-12 col-lg-12 service_box">
                    <div class="single_prising col-xl-4 col-md-4 col-lg-4" style="padding: 50px;">-->
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_prising col-xl-12 col-md-12 col-lg-12 service_box" style="padding: 50px;">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;color: #10c21e;">
                            <i class="fas fa-hiking"></i>
                        </div>
                        <h3>Arrange A trip</h3>
                        <p class="prising_text">Arrange A Trip With Your Friends Or Family Without The Need To Worry About Management.<a href="" style="color: grey;">Get Details</a></p>
                        <p class="prise">Starting from <span>Rs.10,000</span></p>
                        <a class="tri" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Book Now</a>
                    </div>
                    <!----<div class="single_prising col-xl-8 col-md-8 col-lg-8 leftone">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;color: #10c21e;">
                            <h3>Description</h3>
                        </div>                        
                        <p class="prising_text">All The Description Here</p>
                    </div>---->
                </div>
                <!--<div class="col-xl-12 col-md-12 col-lg-12 service_box">
                    <div class="single_prising col-xl-4 col-md-4 col-lg-4" style="padding: 50px;">-->
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_prising col-xl-12 col-md-12 col-lg-12 service_box" style="padding: 50px;">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;color: red;">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Wedding</h3>
                        <p class="prising_text">Wedding is probably one if the most memorable event in one's life and we try our best to make it so.<a href="" style="color: grey;">Get Details</a></p>
                        <p class="prise">Starting from <span>Rs.350,000</span></p>
                        <a class="wed" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Book Now</a>
                    </div>
                    <!----<div class="single_prising col-xl-8 col-md-8 col-lg-8 leftone">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;">
                            <h3>Description</h3>
                        </div>
                        <p>All The Description Here</p>
                    </div>---->
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6">
                    <div class="single_prising col-xl-12 col-md-12 col-lg-12 service_box" style="padding: 50px;">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;color: grey;">
                            <i class="far fa-plus-square"></i>
                        </div>
                        <h3>Customized Service</h3>
                        <p class="prising_text">Havent Found What You Are Looking For?.We Also Offer Our Services Tailored To Your Specific Needs.
                        <p class="prise">Starting from <span>Rs.10,000</span></p>
                        <a onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1" class="custombook">Book Now</a>
                    </div>
                    <!----<div class="single_prising col-xl-8 col-md-8 col-lg-8 leftone">
                        <div class="prising_icon" style="padding: 20px 20px 20px 0;">
                            <h3>Description</h3>
                        </div>
                        <p>All The Description Here</p>
                    </div>---->
                </div>
            </div>
        </div>
    </div>

    <!-- slider_area_start -->
    <div class="slider_area" style="margin-bottom: 100px;padding-top: 150px;" id="search_area">
        <div class="single_slider d-flex align-items-center justify-content-center overlay2" style="background-image:none;height:100%;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <p style="color: #000000;">The Best Event Management Service In Your Town.</p>
                            <h3 style="color: #000000;">Looking For Something!</h3>
                            <div class="find_dowmain">
                                <form action="#" class="find_dowmain_form">
                                    <input type="text" placeholder="Search Here" style="box-shadow: 0px 0px 0px 2px #000000;border-top-left-radius: 0px;border-bottom-left-radius: 0px;">
                                    <button type="submit" style="box-shadow: 0px 0px 0px 2px #000000;background-color: #000000;color: #FFFFFF;border-top-right-radius: 0px;border-bottom-right-radius: 0px;">search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!---->
        <div>
        <div class="slider_area" id="reservation_form1" style="padding-top: 100px;padding-bottom: 100px;" >
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2" style="margin-bottom: 0px;background-image: none;height: 100%;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center"  style="">
                            <p style="color: #000000;">The Best Event Management Service In Your Town.</p>
                            <h3 style="color: #000000;margin-bottom: 10px;">Make A Reservation</h3>
                            <div class="find_dowmain reservation_form">
                                <form id="reservation">
                                    

                                    <?php
                                    if(!isset($_SESSION['email'])){echo '';
                                    ?>
                                    <div style="width: 100%;">
                                    <label for="" class="labelreservation bigweightedfont" style="width: 70%;text-align: left;color: #000000;font-size: 15px;margin-top: 10px;">Name *</label>
                                    </div>
                                    <div><input type="text" id="reservationname" name="reservationname"></div>

                                    <div style="width: 100%;">
                                    <label for="" class="labelreservation" style="width: 70%;text-align: left;color: #000000;font-size: 15px;margin-top: 10px;">Email *</label>
                                    </div>
                                    <div><input type="email" id="reservationemail" name="reservationemail"></div>

                                    <?php '';}?>


                                    <?php
                                    if(isset($_SESSION['email'])){echo '';
                                    ?>
                                    <div style="width: 100%;display: none;">
                                    <label for="" class="labelreservation bigweightedfont" style="width: 70%;text-align: left;color: #000000;font-size: 15px;margin-top: 10px;display: none;">Name *</label>
                                    </div>
                                    <div style="display: none;"><input type="text" id="reservationname" name="reservationname"></div>

                                    <div style="width: 100%;display: none;">
                                    <label for="" class="labelreservation" style="width: 70%;text-align: left;color: #000000;font-size: 15px;margin-top: 10px;display: none;">Email *</label>
                                    </div>
                                    <div style="display: none;"><input type="email" id="reservationemail" name="reservationemail"></div>

                                    <?php '';}?>




                                    <div style="width: 100%;">
                                    <label for="" class="labelreservation" style="width: 70%;text-align: left;color: #000000;font-size:15px;margin-top: 10px;">Active Phone Number *</label>
                                    </div>
                                    <div><input type="text" id="reservationphone" name="reservationphone"></div>

                                    <div style="width: 100%;">
                                    <label for="" class="labelreservation" style="width: 70%;text-align: left;color: #000000;font-size: 15px;margin-top: 10px;">Subject *</label>
                                    </div>
                                    <div><input type="text" name="reservationsubject" id="reservationsubject" list="cars" />
                                            <datalist id="cars" style="width: 100px;">
                                              <option style="font-size: 20px;">Trip</option>
                                              <option style="font-size: 20px;">Birthday</option>
                                              <option style="font-size: 20px;">Bussiness Event</option>
                                              <option style="font-size: 20px;">Opening Ceremony</option>
                                              <option style="font-size: 20px;">Wedding</option>
                                            </datalist></div>
                                    <div style="width: 100%;">
                                    <label for="" class="labelreservation" style="width: 70%;text-align: left;color: #000000;font-size: 15px;margin-top: 10px;">Message *</label>
                                    </div>
                                    <div><textarea type="text" id="reservationmessage" name="reservationmessage" rows="3"></textarea></div>
                                    <div><button>Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!---->
    <!-- prising_area_end -->

    <!-- core_features_start -->
    <div class="core_features" style="padding-top: 120px;" id="gallery_area">
        <div class="container">
            <div class="border-bottm" style="margin-bottom: 0px !important;">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h3>
                                <span style="background:#fff;padding:0 30px;">Events Gallery</span>
                            </h3>
                            
                            <p>Be Amazed By Our Previous Ventures and Book Yours Now.<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="featurest_tabs ">
                            <nav>
                                <div class="nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true"><strong>Opening Ceremony</strong></a>
                                    <a class="nav-item nav-link" id="nav-trips-tab" data-toggle="tab"
                                        href="#nav-trips" role="tab" aria-controls="nav-profile"
                                        aria-selected="false"><strong>Trips</strong></a>
                                    <a class="nav-item nav-link" id="nav-weddings-tab" data-toggle="tab"
                                        href="#nav-weddings" role="tab" aria-controls="nav-profile"
                                        aria-selected="false"><strong>Weddings</strong></a>
                                    <a class="nav-item nav-link" id="nav-birthdays-tab" data-toggle="tab"
                                        href="#nav-birthdays" role="tab" aria-controls="nav-profile"
                                        aria-selected="false"><strong>Birthdays</strong></a>
                                    <a class="nav-item nav-link" id="nav-bussiness-tab" data-toggle="tab"
                                        href="#nav-bussiness" role="tab" aria-controls="nav-profile"
                                        aria-selected="false" style="margin-right: 0px !important;"><strong>Corporate Bussiness</strong></a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="section-top-border">
    <div class="row gallery-item" id="opening_ceremony_gallery">
                            <div class="col-md-4">
                                <a href="img/elements/g1.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g2.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g3.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g4.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g5.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div>
                                </a>
                            </div>

                            
                            
    </div>                      
                        <div class="row gallery-item" id="opening_ceremony_gallery1">
                            <div class="col-md-12">
                                <button id="loadmoreopeningceremony" class="col-md-12 loadmorebutton" style="border: 1px solid #000;background:transparent;color: black;margin-top: 30px;padding-top: 20px;padding-bottom: 20px;font-size: 20px;transition: 0.5s ease;">Load More</button>
                            </div>
                        </div>
                        </div>
                    </div>





                    <div class="tab-pane fade" id="nav-trips" role="tabpanel"
                            aria-labelledby="nav-trips-tab">
                            <div class="section-top-border">
    <div class="row gallery-item" id="trips_gallery">
                            <div class="col-md-4">
                                <a href="img/elements/g1.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g2.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g3.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g4.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g5.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div>
                                </a>
                            </div>

                            
                            
    </div>                      
                        <div class="row gallery-item" id="trips_gallery1">
                            <div class="col-md-12">
                                <button id="loadmoretrips" class="col-md-12 loadmorebutton" style="border: 1px solid #000;background:transparent;color: black;margin-top: 30px;padding-top: 20px;padding-bottom: 20px;font-size: 20px;transition: 0.5s ease;">Load More</button>
                            </div>
                        </div>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="nav-weddings" role="tabpanel"
                            aria-labelledby="nav-weddings-tab">
                            <div class="section-top-border">
    <div class="row gallery-item" id="weddings_gallery">
                            <div class="col-md-4">
                                <a href="img/elements/g1.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g2.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g3.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g4.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g5.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div>
                                </a>
                            </div>

                            
                            
    </div>                      
                        <div class="row gallery-item" id="weddings_gallery1">
                            <div class="col-md-12">
                                <button id="loadmoreweddings" class="col-md-12 loadmorebutton" style="border: 1px solid #000;background:transparent;color: black;margin-top: 30px;padding-top: 20px;padding-bottom: 20px;font-size: 20px;transition: 0.5s ease;">Load More</button>
                            </div>
                        </div>
                        </div>
                    </div>





<div class="tab-pane fade" id="nav-birthdays" role="tabpanel"
                            aria-labelledby="nav-birthdays-tab">
                            <div class="section-top-border">
    <div class="row gallery-item" id="birthdays_gallery">
                            <div class="col-md-4">
                                <a href="img/elements/g1.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g2.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g3.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g4.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g5.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div>
                                </a>
                            </div>

                            
                            
    </div>                      
                        <div class="row gallery-item" id="birthdays_gallery1">
                            <div class="col-md-12">
                                <button id="loadmorebirthdays" class="col-md-12 loadmorebutton" style="border: 1px solid #000;background:transparent;color: black;margin-top: 30px;padding-top: 20px;padding-bottom: 20px;font-size: 20px;transition: 0.5s ease;">Load More</button>
                            </div>
                        </div>
                        </div>
                    </div>









                    <div class="tab-pane fade" id="nav-bussiness" role="tabpanel"
                            aria-labelledby="nav-bussiness-tab">
                            <div class="section-top-border">
    <div class="row gallery-item" id="bussiness_gallery">
                            <div class="col-md-4">
                                <a href="img/elements/g1.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g2.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="img/elements/g3.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g4.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="img/elements/g5.jpg" class="img-pop-up">
                                    <div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div>
                                </a>
                            </div>

                            
                            
    </div>                      
                        <div class="row gallery-item" id="bussiness_gallery1">
                            <div class="col-md-12">
                                <button id="loadmorebussiness" class="col-md-12 loadmorebutton" style="border: 1px solid #000;background:transparent;color: black;margin-top: 30px;padding-top: 20px;padding-bottom: 20px;font-size: 20px;transition: 0.5s ease;">Load More</button>
                            </div>
                        </div>
                        </div>
                    </div>











                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- core_features_end -->




    <!-- faq_area_start -->
    <div class="faq_area" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="accordion_heading">
                        <h3><span style="background:#fff;padding:0 10px;">Frequently Asked Questions</span></h3>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="flaticon-info" style="font-weight: 800px !important;"></i> Does The Trip Service Include Hotels Stays.
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Yes.It Depends On The Domain Of The Trip and Budget.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="flaticon-info"></i> What Are The charges of added facilities in one of your pre-built packages?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    We Start at Rs.5000 per added facility in any of our packaged services.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="flaticon-info"></i> Will Your Service Include Extensions?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Surely, but it will affect the overall package charges and delivery time.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                        <i class="flaticon-info"></i> Will I Be Notified In Any Step Of My Service Arrangement.
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                                <div class="card-body">
                                    We Ensure That We Take Our Customers In Confidance for every action regarding them.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                        <i class="flaticon-info"></i> How do I get started
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_5" class="collapse" aria-labelledby="heading_5" data-parent="#accordion">
                                <div class="card-body">
                                    Just Go To The Booking Section And Fill The Reservation Form,If You Are A Regular Customer Then We Encourage You To Signup And Be A Member Of Our Website.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->



    <!-- latest_new_area_start -->
    <!--
    <div class="latest_new_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Latest News
                        </h3>
                        <p>Your domain control panel is designed for ease-of-use and <br>
                            allows for all aspects of your domains.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_news">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/news/1.png" alt="">
                            </a>
                        </div>
                        <div class="news_content">
                            <div class="news_meta">
                                <a href="#">12 Jun, 2019 in <span>Hosting tips</span> </a>
                            </div>
                            <h3><a href="#">Commitment to dedicated
                                    Support</a></h3>
                            <p class="news_info">Firmament morning sixth subdue darkness</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_news">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/news/2.png" alt="">
                            </a>
                        </div>
                        <div class="news_content">
                            <div class="news_meta">
                                <a href="#">12 Jun, 2019 in <span>Hosting tips</span> </a>
                            </div>
                            <h3><a href="#">Commitment to dedicated
                                    Support</a></h3>
                            <p class="news_info">Firmament morning sixth subdue darkness</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_news">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/news/3.png" alt="">
                            </a>
                        </div>
                        <div class="news_content">
                            <div class="news_meta">
                                <a href="#">12 Jun, 2019 in <span>Hosting tips</span> </a>
                            </div>
                            <h3><a href="#">Commitment to dedicated
                                    Support</a></h3>
                            <p class="news_info">Firmament morning sixth subdue darkness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- latest_new_area_end -->


    <!-- footer -->
    <footer class="footer" id="about_section">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <h3 style="color: #ffffff;">E-Manager</h3>
                                </a>
                            </div>
                            <p class="footer_text doanar"> <a class="first" href="#">+92 315 533 4531
                                </a> <br>
                                <a href="#">e.manager.website@gmail.com</a></p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#reservation_form1" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Wedding</a></li>
                                <li><a href="#reservation_form1" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Opening Ceremony</a></li>
                                <li><a href="#reservation_form1" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Birthday Party</a></li>
                                <li><a href="#reservation_form1" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Trips</a></li>
                                <li><a href="#reservation_form1" onclick="$.scrollTo('#reservation_form1',500,{easing:'elasout'});" href="#reservation_form1">Corporate Bussiness</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Gallery
                            </h3>
                            <ul>
                                <li><a href="#">Trips</a></li>
                                <li><a href="#">Openings</a></li>
                                <li><a href="#">Weddings</a></li>
                                <li><a href="#">Bussiness</a></li>
                                <li><a href="#">Birthdays</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form id="newsletter_form" class="newsletter_form">
                                <input type="email" id="newsletteremail" name="newsletteremail" placeholder="Enter your mail">
                                <button style="background-color: #FF6550 !important;">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                        <a href="#">
                            <h3 style="color: #000000;text-align: center;">E-Manager</h3>
                        </a>
                </div>
                <h3>Sign in</h3>
                <form>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <p id="emailloginerror" style="font-size: 15px;margin:0px;margin-left: 10px;color: red;padding: 0px;text-align: left;"></p>
                            <input type="email" name="emaillogin" id="emaillogin" placeholder="Enter email">

                        </div>
                        <div class="col-xl-12 col-md-12">
                            <p id="passwordloginerror" style="font-size: 15px;margin:0px;margin-left: 10px;color: red;padding: 0px;text-align: left;"></p>
                            <input type="password" name="passwordlogin" id="passwordlogin" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" name="submitlogin" class="boxed_btn_green">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <h3 style="color: #000000;text-align: center;">E-Manager</h3>
                    </a>
                </div>
                <h3>Sign Up</h3>
                <form enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <p id="usernameregistererror" style="font-size: 15px;margin:0px;margin-left: 10px;color: red;padding: 0px;text-align: left;"></p>
                            <input type="text" name="usernameregister" id="usernameregister" placeholder="Public Username">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <p id="emailregistererror" style="font-size: 15px;margin:0px;margin-left: 10px;color: red;padding: 0px;text-align: left;"></p>
                            <input type="email" name="emailregister" id="emailregister" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <p id="passwordregistererror" style="font-size: 15px;margin:0px;margin-left: 10px;color: red;padding: 0px;text-align: left;"></p>
                            <input type="password" name="passwordregister" id="passwordregister" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <p id="profilepicregistererror" style="font-size: 15px;margin:0px;margin-left: 10px;color: red;padding: 0px;text-align: left;"></p>
                            <input type="file" name="profilepicregister" id="profilepicregister" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" name="submitregister" class="boxed_btn_green">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!--BackToTop Button Start-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!--BackToTop Button End-->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!--this was causing problem for easing effect<script src="js/vendor/jquery-1.12.4.min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    
    <script type="text/javascript">
        $( document ).ready(function() {

            // Must ______ For Changing The Active Class For Nav Link When Pressed by one Start
            $('.nav_ul_class li a').click(function() {
                $('.nav_ul_class li a').removeClass('active');
                $(this).addClass('active');
            });
            // Must ______ For Changing The Active Class For Nav Link When Pressed by one End

            // Must ______ For Login Form start
            document.getElementById('test-form').setAttribute("action", "login_php.php");
            document.getElementById('test-form').setAttribute("method", "post");
            // Must ______ For Login Form end

            // Must ______ For Signup Form start
            document.getElementById('test-form2').setAttribute("action", "signup_php.php");
            document.getElementById('test-form2').setAttribute("method", "post");
            document.getElementById('test-form2').setAttribute("enctype", "multipart/form-data");
            // Must ______ For Signup Form end


            // Login Form Ajax Start
            $("#test-form").submit(function(e){
                e.preventDefault();
                var data = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: 'login_php.php',
                    data: data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        var jsonObj = JSON.parse(data);
                        // Validate Email And Password Fields Start
                        if(jsonObj.emaillogin!==null){
                            var emaillogin=document.getElementById('emaillogin');
                            emaillogin.style.border="1px solid red";
                            emaillogin.style.background="#e89b9b";
                            document.getElementById('emailloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.emaillogin==null){
                            var emaillogin=document.getElementById('emaillogin');
                            emaillogin.style.border="1px solid #ddd";
                            emaillogin.style.background="#ffffff";
                            document.getElementById('emailloginerror').innerHTML="";
                        }
                        if(jsonObj.passwordlogin!==null){
                            var passwordlogin=document.getElementById('passwordlogin');
                            passwordlogin.style.border="1px solid red";
                            passwordlogin.style.background="#e89b9b";
                            document.getElementById('passwordloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.passwordlogin==null){
                            var passwordlogin=document.getElementById('passwordlogin');
                            passwordlogin.style.border="1px solid #ddd";
                            passwordlogin.style.background="#ffffff";
                            document.getElementById('passwordloginerror').innerHTML="";
                        }
                        // Validate Email And Password Fields End

                        // Get The Result From Database Start
                        if(jsonObj.queryerror!==null){
                            if (jsonObj.queryerror==="User LoggedIn") {
                                console.log('kx a xnalkn ');
                                sessionStorage.setItem('User LoggedIn',true);
                                window.location.reload(false);
                            }
                            else if (jsonObj.queryerror==="Admin LoggedIn") {
                                window.location='admin/index.php';
                            }
                            else{
                                alert(jsonObj.queryerror);
                            }      
                        }
                        // Get The Result From Database End
                    },
                    });
            });
            // Login Form Ajax End

            // For Alert After Login
            if ( sessionStorage.getItem('User LoggedIn') ) {
                alert( "You Have Been Logged In Successfully" );
                sessionStorage.removeItem('User LoggedIn');
            }

            // Signup Form Ajax Start
            $("#test-form2").submit(function(e){
                e.preventDefault();
                var data = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: 'signup_php.php',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                       if(data==="You Have Been Registered Successfully"){
                            sessionStorage.setItem('You Have Been Registered Successfully',true);
                            window.location.reload(false);
                       }
                       var jsonObj = JSON.parse(data);
                        // Validate Username, Email And Password Fields Start
                        if(jsonObj.usernameregister!==null){
                            var usernameregister=document.getElementById('usernameregister');
                            usernameregister.style.border="1px solid red";
                            usernameregister.style.background="#e89b9b";
                            document.getElementById('usernameregistererror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.usernameregister==null){
                            var usernameregister=document.getElementById('usernameregister');
                            usernameregister.style.border="1px solid #ddd";
                            usernameregister.style.background="#ffffff";
                            document.getElementById('usernameregistererror').innerHTML="";
                        }
                        if(jsonObj.emailregister!==null){
                            var emailregister=document.getElementById('emailregister');
                            emailregister.style.border="1px solid red";
                            emailregister.style.background="#e89b9b";
                            document.getElementById('emailregistererror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.emailregister==null){
                            var emailregister=document.getElementById('emailregister');
                            emailregister.style.border="1px solid #ddd";
                            emailregister.style.background="#ffffff";
                            document.getElementById('emailregistererror').innerHTML="";
                        }
                        if(jsonObj.passwordregister!==null){
                            var passwordregister=document.getElementById('passwordregister');
                            passwordregister.style.border="1px solid red";
                            passwordregister.style.background="#e89b9b";
                            document.getElementById('passwordregistererror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.passwordregister==null){
                            var passwordregister=document.getElementById('passwordregister');
                            passwordregister.style.border="1px solid #ddd";
                            passwordregister.style.background="#ffffff";
                            document.getElementById('passwordregistererror').innerHTML="";
                        }

                        if(jsonObj.queryerror==null){
                            var profilepicregister=document.getElementById('profilepicregister');
                            profilepicregister.style.border="1px solid #ddd";
                            profilepicregister.style.background="#ffffff";
                            document.getElementById('profilepicregistererror').innerHTML="";
                        }

                        if (jsonObj.queryerror==="Unsupported File Format") {
                            var profilepicregister=document.getElementById('profilepicregister');
                            profilepicregister.style.border="1px solid red";
                            profilepicregister.style.background="#e89b9b";
                            document.getElementById('profilepicregistererror').innerHTML="Unsupported File Format";
                        }
                        else if (jsonObj.queryerror==="You Have Been Registered Successfully") {
                            sessionStorage.setItem('You Have Been Registered Successfully',true);
                            window.location.reload(false);
                        }
                        else if(jsonObj.queryerror!==null && jsonObj.queryerror!=="You Have Been Registered Successfully" && jsonObj.queryerror!=="Unsupported File Format"){
                            alert(jsonObj.queryerror);
                        }


                    },
                    });
            });
            // Signup Form Ajax End
    

            // For Alert After Signup
            if(sessionStorage.getItem('You Have Been Registered Successfully')){
                alert('You Have Been Registered Successfully');
                sessionStorage.removeItem('You Have Been Registered Successfully');
            }


            // Reservation Form Ajax Start
            $("#reservation").submit(function(e){
                e.preventDefault();
                var data = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: 'reservation_php.php',
                    data: data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {

                        var jsonObj = JSON.parse(data);
                        // Validate Name,Email And PhoneNo,Subject And Message Fields Start
                        if(jsonObj.reservationname!==null){
                            var reservationname=document.getElementById('reservationname');
                            reservationname.style.border="2px solid red";
                            reservationname.style.background="#e89b9b";
                            //document.getElementById('emailloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.reservationname==null){
                            var reservationname=document.getElementById('reservationname');
                            reservationname.style.border="2px solid #000";
                            reservationname.style.background="#ffffff";
                            //document.getElementById('emailloginerror').innerHTML="";
                        }
                        if(jsonObj.reservationemail!==null){
                            var reservationemail=document.getElementById('reservationemail');
                            reservationemail.style.border="2px solid red";
                            reservationemail.style.background="#e89b9b";
                            //document.getElementById('passwordloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.reservationemail==null){
                            var reservationemail=document.getElementById('reservationemail');
                            reservationemail.style.border="2px solid #000";
                            reservationemail.style.background="#ffffff";
                            //document.getElementById('passwordloginerror').innerHTML="";
                        }
                        if(jsonObj.reservationphone!==null){
                            var reservationphone=document.getElementById('reservationphone');
                            reservationphone.style.border="2px solid red";
                            reservationphone.style.background="#e89b9b";
                            //document.getElementById('passwordloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.reservationphone==null){
                            var reservationphone=document.getElementById('reservationphone');
                            reservationphone.style.border="2px solid #000";
                            reservationphone.style.background="#ffffff";
                            //document.getElementById('passwordloginerror').innerHTML="";
                        }
                        if(jsonObj.reservationsubject!==null){
                            var reservationsubject=document.getElementById('reservationsubject');
                            reservationsubject.style.border="2px solid red";
                            reservationsubject.style.background="#e89b9b";
                            //document.getElementById('passwordloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.reservationsubject==null){
                            var reservationsubject=document.getElementById('reservationsubject');
                            reservationsubject.style.border="2px solid #000";
                            reservationsubject.style.background="#ffffff";
                            //document.getElementById('passwordloginerror').innerHTML="";
                        }
                        if(jsonObj.reservationmessage!==null){
                            var reservationmessage=document.getElementById('reservationmessage');
                            reservationmessage.style.border="2px solid red";
                            reservationmessage.style.background="#e89b9b";
                            //document.getElementById('passwordloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.reservationmessage==null){
                            var reservationmessage=document.getElementById('reservationmessage');
                            reservationmessage.style.border="2px solid #000";
                            reservationmessage.style.background="#ffffff";
                            //document.getElementById('passwordloginerror').innerHTML="";
                        }
                        // Validate Name,Email And PhoneNo,Subject And Message Fields End

                        // Get The Result From Database Start
                        if(jsonObj.queryerror!==null){
                            if (jsonObj.queryerror==="Thanks For Registeration.Our Team Will Contact You Soon For Indepth Info Of Your Required Service.") {
                                sessionStorage.setItem('BookingDone',true);
                                window.location.reload(false);
                            }
                            else{
                                alert(jsonObj.queryerror);
                            }      
                        }
                        // Get The Result From Database End
                    },
                    });
            });
            // Reservation Form Ajax End


            // For Alert After Reservation
            if(sessionStorage.getItem('BookingDone')){
                alert('Thanks For Registeration.Our Team Will Contact You Soon For Indepth Info Of Your Required Service.');
                sessionStorage.removeItem('BookingDone');
            }

            // Newsletter Form Ajax Start
            $("#newsletter_form").submit(function(e){
                e.preventDefault();
                console.log('jxbsjkb');
                var data = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: 'newsletter_php.php',
                    data: data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        var jsonObj = JSON.parse(data);
                        // Validate Email And Password Fields Start
                        
                        if(jsonObj.newsletteremail!==null){
                            var newsletteremail=document.getElementById('newsletteremail');
                            //passwordlogin.style.border="1px solid red";
                            newsletteremail.style.background="#e89b9b";
                            //document.getElementById('passwordloginerror').innerHTML="This Field Is Required";
                        }
                        else if(jsonObj.newsletteremail==null){
                            var newsletteremail=document.getElementById('newsletteremail');
                            //passwordlogin.style.border="1px solid #ddd";
                            newsletteremail.style.background="#ffffff";
                            //document.getElementById('passwordloginerror').innerHTML="";
                        }
                        // Validate Email And Password Fields End

                        // Get The Result From Database Start
                        if(jsonObj.queryerror!==null){
                            alert(jsonObj.queryerror);
                        }
                        // Get The Result From Database End
                    },
                    });
            });
            // Newsletter Form Ajax End

            // For Appending gallery pics to opening ceremony gallery start
            var counter0=0;
            $('#loadmoreopeningceremony').click(function(e){
                e.preventDefault();
                var loadmoreopeningceremony = 'loadmoreopeningceremony'; 
                $.ajax({
                    type:"POST",
                    url:"loadgallery_php.php",
                    data: ({loadmoreopeningceremony: loadmoreopeningceremony,counter0:counter0}),
                    cache:false,
                    success:function(data){
                        //console.log('success function');
                        var jsonObj = JSON.parse(data);
                        var i=0;
                        while(i<3){
                            if(jsonObj[i]!==null){
                            //console.log('loop running');
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-4');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('opening_ceremony_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        while(i<5){
                            if(jsonObj[i]!==null){
                            
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-6');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('opening_ceremony_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        counter0+=5;
                        
                        if(jsonObj[i]==null){
                            console.log('json object is now null');
                        }
                        
                    }
                });
            });

            // For Appending gallery pics to opening ceremony gallery end

            // For Appending gallery pics to trips gallery start
            var counter1=0;
            $('#loadmoretrips').click(function(e){
                e.preventDefault();
                var loadmoretrips = 'loadmoretrips'; 
                $.ajax({
                    type:"POST",
                    url:"loadgallery_php.php",
                    data: ({loadmoretrips: loadmoretrips,counter1:counter1}),
                    cache:false,
                    success:function(data){
                        //console.log('success function');
                        var jsonObj = JSON.parse(data);
                        var i=0;
                        while(i<3){
                            if(jsonObj[i]!==null){
                            //console.log('loop running');
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-4');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('trips_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        while(i<5){
                            if(jsonObj[i]!==null){
                            
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-6');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('trips_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        counter1+=5;
                        
                        if(jsonObj[i]==null){
                            console.log('json object is now null');
                        }
                        
                    }
                });
            });
            // For Appending gallery pics to trips gallery end



            // For Appending gallery pics to weddings gallery start
            var counter2=0;
            $('#loadmoreweddings').click(function(e){
                e.preventDefault();
                var loadmoreweddings = 'loadmoreweddings'; 
                $.ajax({
                    type:"POST",
                    url:"loadgallery_php.php",
                    data: ({loadmoreweddings: loadmoreweddings,counter2:counter2}),
                    cache:false,
                    success:function(data){
                        //console.log('success function');
                        var jsonObj = JSON.parse(data);
                        var i=0;
                        while(i<3){
                            if(jsonObj[i]!==null){
                            //console.log('loop running');
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-4');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('weddings_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        while(i<5){
                            if(jsonObj[i]!==null){
                            
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-6');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('weddings_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        counter2+=5;
                        
                        if(jsonObj[i]==null){
                            console.log('json object is now null');
                        }
                        
                    }
                });
            });
            // For Appending gallery pics to weddings gallery end




            // For Appending gallery pics to birthdays gallery start
            var counter3=0;
            $('#loadmorebirthdays').click(function(e){
                e.preventDefault();
                var loadmorebirthdays = 'loadmorebirthdays'; 
                $.ajax({
                    type:"POST",
                    url:"loadgallery_php.php",
                    data: ({loadmorebirthdays: loadmorebirthdays,counter3:counter3}),
                    cache:false,
                    success:function(data){
                        //console.log('success function');
                        var jsonObj = JSON.parse(data);
                        var i=0;
                        while(i<3){
                            if(jsonObj[i]!==null){
                            //console.log('loop running');
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-4');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('birthdays_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        while(i<5){
                            if(jsonObj[i]!==null){
                            
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-6');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('birthdays_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        counter3+=5;
                        
                        if(jsonObj[i]==null){
                            console.log('json object is now null');
                        }
                        
                    }
                });
            });
            // For Appending gallery pics to birthdays gallery end




            // For Appending gallery pics to Bussiness start
            var counter4=0;
            $('#loadmorebussiness').click(function(e){
                e.preventDefault();
                var loadmorebussiness = 'loadmorebussiness'; 
                $.ajax({
                    type:"POST",
                    url:"loadgallery_php.php",
                    data: ({loadmorebussiness: loadmorebussiness,counter4:counter4}),
                    cache:false,
                    success:function(data){
                        //console.log('success function');
                        var jsonObj = JSON.parse(data);
                        var i=0;
                        while(i<3){
                            if(jsonObj[i]!==null){
                            //console.log('loop running');
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-4');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('bussiness_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        while(i<5){
                            if(jsonObj[i]!==null){
                            
                            var parent1=document.createElement('div');
                            parent1.setAttribute('class','col-md-6');

                            var child1=document.createElement('a');
                            child1.setAttribute('class','img-pop-up');
                            child1.setAttribute('href','img/gallerypic/'+jsonObj[i]+'');
                            parent1.appendChild(child1);

                            var child2=document.createElement('div');
                            child2.setAttribute('class','single-gallery-image');
                            child2.setAttribute('style','background: url(img/gallerypic/'+jsonObj[i]+');');
                            child1.appendChild(child2);

                            document.getElementById('bussiness_gallery').appendChild(parent1);
                            }
                        i++;
                        }
                        counter4+=5;
                        
                        if(jsonObj[i]==null){
                            console.log('json object is now null');
                        }
                        
                    }
                });
            });
            // For Appending gallery pics to Bussiness end

        // IO Button Start__________
        //WhatsHelp.io widget//
        //_________________<email start>__________________
        (function () {
            var options = {
                email: "huzaifarasheed001@gmail.com", // Email
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
        //_________________</email end>____________________

        //_________________<whatsapp start>________________
         (function () {
            var options = {
                whatsapp: "+923155334531", // WhatsApp number
                call: "+923155334531", // Call phone number
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,call", // Order of buttons
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
        //_________________</whatsapp end>__________________

        //____________SMS SCRIPT START
        /*
        (function () {
            var options = {
                sms: "+923155334531", // Sms phone number
                call_to_action: "Message us", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
        */
        //____________SMS SCRIPT END

        ///WhatsHelp.io widget//
        // IO Button End__________




            });
    </script>















    <script type="text/javascript">
        //BackToTop Button Start____________
        //____________BackToTop Button Start
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            $('html, body').animate({scrollTop:0}, '300');
            $('html, documentElement').animate({scrollTop:0}, '300');
          //document.body.scrollTop = 0; // For Safari
          //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        //____________BackToTop Button End
        //BackToTop Button End____________
    </script>

</body>

</html>