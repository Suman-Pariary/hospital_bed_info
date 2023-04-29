<?php
include_once('webconfig.php');
if(isset($_POST['action']) && $_POST['action'] == 'adminlog'){
	//echo "Select * from admin_user where adminUsername = '".$_POST['adminUsername']."' and 
//	adminPaswd = '".md5($_POST['adminPaswd'])."' and adminStatus = 'Active'";
//	exit;
	$qrylogdata = mysqli_query($link, "Select * from admin_user where adminUsername = '".$_POST['adminUsername']."' and 
	adminPaswd = '".md5($_POST['adminPaswd'])."' and adminStatus = 'Active'");
	
	if(mysqli_num_rows($qrylogdata) > 0){
		$rowsqldata = mysqli_fetch_assoc($qrylogdata);
		$_SESSION['adminUser']	= $rowsqldata['adminId'];
		$_SESSION['message'] = 'Login Success.';
		header("location:dashboard.php");
		exit;
	}else{
		
		$_SESSION['message'] = 'Username and Password did not match.';
		//header("location:../stateform.php");
		//exit;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HBI - Admin Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
	<?php include_once("common/header.php");?>
  <main id="main" style="padding-top:150px;" align="center">
	<section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
      <?php if(!empty($_SESSION['message'])){?>
       	<div class="row"><font color="red"><strong><?php echo $_SESSION['message']; ?></strong></font></div>
         <?php $_SESSION['message'] = ''; } ?>
	  	<div class="row">
          <div class="col-lg-6">
                <form action="adminlogin.php" method="post" role="form" class="php-email-form1">
                <input type="hidden" name="action" value="adminlog">
                  
                    <div class="col form-group">
                      <input type="text" name="adminUsername" class="form-control" id="adminUsername" placeholder="Your User Name" required>
                    </div>
                    <div class="col form-group mt-3">
                      <input type="password" class="form-control" name="adminPaswd" id="adminPaswd" placeholder="Your Password" required>
                    </div>
                  
                  
                  <div class="text-center" style="padding-top:10px;"><button type="submit">Login</button></div>
                </form>
                </div>
              </div>
            </div>
         </div>
    </section>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once("common/footer.php");?><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>