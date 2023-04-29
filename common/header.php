<?php
$pageurl = explode("/", $_SERVER['REQUEST_URI']);
$pagename = $pageurl[count($pageurl)-1];
?>
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 9749230448
      </div>
    </div>
  </div>
 <?php if(!empty($_SESSION['adminUser'])){?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

		<h1><b>Bed Tracking System</b></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="dashboard.php">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="statemaster.php">State</a></li>
          <li><a class="nav-link scrollto" href="districtmaster.php">District</a></li>
          <li><a class="nav-link scrollto" href="hospitalmaster.php">Hospital</a></li>
        <li><a class="nav-link scrollto" href="masterbedmaster.php">Bed Type</a></li>
          <li><a class="nav-link scrollto" href="bedmaster.php">Bed</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Logout</span></a>

    </div>
  </header>
<?php }else{ ?>
	<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

		<h1><b>Bed Tracking System</b></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#departments">Hospital</a></li>
          <li><a class="nav-link scrollto" href="#services">Bed Tracking</a></li>
          
         <!-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="adminlogin.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Admin Panel</span></a>

    </div>
  </header>
<?php }?> 
<?php if($pagename != 'adminlogin.php'){?>  
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to our <span>Bed Tracking System</span></h2>
            <p>Hospital Bed Management System is a process in which, it has a real-time status of all the available beds and the bed occupied, to plan for the efficient use of beds. It helps the staff and management by reducing the time of counting and recording the availability of beds.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Welcome to our <span>Bed Tracking System</span></h2>
            <p>The lack of adequate numbers of hospital beds to accommodate the injured is a main problem in public hospitals. For control of occupancy of bed, we design a dynamic system that announces status of bed.This system provide a wide network in state for bed management, especially for ICU and CCU beds that help us to distribute injured patient in the hospitals.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Welcome to our <span>Bed Tracking System</span></h2>
            <p>We design database for store bed data which transfer from hospitals. And develop web site for analysis bed data and determined which bed in hospital is available. </p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <?php } ?>