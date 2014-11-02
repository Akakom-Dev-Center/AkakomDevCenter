<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
   <title>Akakom Dev Center</title>
   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <meta name="author" content="adc.akakom.ac.id">
   <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
   <meta name="Description" content="Free tutorials and reference for Desktop, Game, Mobile and Web Development"/>
   <meta name="Keywords" content="ADC, AKAKOM, Akakom Dev Center, STMIK AKAKOM, Moduul, Article, Latest, Technologies, Free,  Tutorials, References, Examples"/>
 <base  />

   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

   <link rel="stylesheet" href="theme/css/fonts/font-awesome/css/font-awesome.css">
   <link rel="stylesheet" href="theme/css/custom.css"/>
   <link rel="stylesheet" href="theme/css/theme-responsive.css" />
   <link rel="stylesheet" type="text/css" href="theme/colorbox.css" />
   <link rel="stylesheet" type="text/css" href="theme/prettify.css" />

   <script type="text/javascript" src="theme/prettify.js"></script>
   <script src="theme/vendor/modernizr.js"></script>
<!-- Custom CSS & JS -->
   <script type="text/javascript" src="../scripts/jquery.min.js"></script>
   <script type="text/javascript" src="../scripts/mobile.js"></script>
   

   <style>
      div.feature-box div.feature-box-icon,
      .col-md-3 .course-box, header nav ul.nav-main ul.dropdown-menu, 
      nav.mega-menu .mega-menu-signin .dropdown-menu li, footer div.footer-ribon, div.footer-copyright, 
      li.heading, header nav ul.nav-main li.dropdown:hover a {
         background-color: #202020 !important;
      }
      .selected-reading-boxes .col-md-3 .course-box{
        background-color: transparent !important;
      }
      img.mobile-apps {
         border: 1px solid #202020 !important;
      }
      footer ul.list li{
         background: none !important;
         padding: 0px;
      }
      p a, footer i.icon, footer ul.list.icons li i {
         color: #FFF !important;
      }
   </style>
</head>

<body onload="prettyPrint()">
<?php include "config.php"; ?>
<div class="body">
   <header>
      <div class="container">
         <h1 class="logo">
            <a href="index.php">
               <img alt="Akakom Dev Center" src="images/logo.png">
            </a>
         </h1>
         <div class="search">
            <form method="get" id="searchform" name="searchform" action="http://www.google.com/search" target="_blank">
            <input type="hidden" name="sitesearch" value="www.adc.akakom.ac.id"/>
               <div class="input-group">
               <input type="text" class="form-control search" name="q" id="q" placeholder="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}">
               <input value="FORID:11" name="cof" type="hidden"/>
               <input type="hidden" name="ie" value="ISO-8859-1" />
               <span class="input-group-btn">
               <button class="btn btn-default" type="submit"><i class="icon icon-search"></i></button>
               </span>
               </div>
            </form>
         </div>
         <div class="social-icons">
            <ul class="social-icons">
               <li class="facebook"><a href="http://www.facebook.com/akakomdevcenter" target="_blank" title="Facebook">Facebook</a></li>
               <li class="twitter"><a href="http://www.twitter.com/akakomdevcenter" target="_blank" title="Twitter">Twitter</a></li>
               <li class="rss"><a href="http://feeds.feedburner.com/akakomdevcenter" target="_blank" title="RSS">RSS</a></li>
            </ul>
         </div>
         <nav>
            <ul class="nav nav-pills nav-top">
               <li><a href="#"><i class="icon  icon-file-text-o"></i>Akakom</a></li>
               <li><a href="#"><i class="icon  icon-user"></i>Forums</a></li>
               <li><a href="#"><i class="icon  icon-external-link"></i>Shared</a></li>
            </ul>
         </nav>
         <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse" id="pull">
            <i class="icon icon-bars"></i>
         </button>
      </div>

      <div class="navbar-collapse nav-main-collapse collapse">
         <div class="container">
            <nav class="nav-main mega-menu">
               <ul class="nav nav-pills nav-main" id="mainMenu">
                  <li class="dropdown"><a class="dropdown" href="index.php">Home</a></li>   
                  <li class="dropdown"><a class="dropdown" href="artikel.php">Articles</a></li>
                  <li class="dropdown"><a class="dropdown" href="tutorial.php">Tutorilas</a></li>
                  <li class="dropdown"><a class="dropdown" href="modul.php">Modules</a></li>
                  <li class="dropdown"><a class="dropdown" href="showcase.php">Showcases</a></li>
                  <li class="dropdown"><a class="dropdown" href="event.php">Events</a></li>
                  <li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
                     <a class="dropdown-toggle" href="bahan.php">Templates</a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown" href="contents/categori/index.php">Categories</a></li>
                        <li><a class="dropdown" href="contents/sub-categori/index.php">Sub Categories</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </header>