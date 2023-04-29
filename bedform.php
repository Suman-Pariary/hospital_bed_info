<?php
include_once('webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:adminlogin.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BI::Admin:Bed</title>
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
  <main id="main">

	    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Bed Data</h2>
          
        </div>

      </div>

      <div class="container" align="center">
		<?php if(!empty($_SESSION['message'])){?>
       	<div class="row"><font color="red"><strong><?php echo $_SESSION['message']; ?></strong></font></div>
         <?php $_SESSION['message'] = ''; } ?>
        <div class="row mt-5">

            <div class="col-lg-6" >
            <form action="data/beddata-sql.php" method="post" role="form" class="php-email-form1">
            <input type="hidden" name="action" value="bedinsert">
              <div class="row">
              <div class="col form-group">
					  <select name="hospital_id" id="hospital_id" class="form-control" required>
						  <option value="">--Hospital--</option>
						  <?php
						  $qrylogdata1 = mysqli_query($link, "Select * from hospital_table");
						  while($rowsqldata1 = mysqli_fetch_assoc($qrylogdata1)){ 
						  ?>
						  <option value="<?php echo $rowsqldata1['hospital_id'];?>"><?php echo $rowsqldata1['hospital_name'];?></option>
						  <?php } ?>
					  </select>
                  
                </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="col form-group">
					  <select name="bed_type" id="bed_type" class="form-control" required>
						  <option value="">--Bed Type--</option>
						  <?php
						  $qrylogdata2 = mysqli_query($link, "Select * from master_bed_type where bed_status='Active'");
						  while($rowsqldata2 = mysqli_fetch_assoc($qrylogdata2)){ 
						  ?>
						  <option value="<?php echo $rowsqldata2['bed_id'];?>"><?php echo $rowsqldata2['bed_type'];?></option>
						  <?php } ?>
					  </select>
                  
                </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="col form-group">
                  <input type="number" name="total_bed" class="form-control" id="total_bed" placeholder="Total Bed" required>
                </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="col form-group">
                  <input type="number" name="available_bed" class="form-control" id="available_bed" placeholder="Available Bed" required>
                </div>
              
              </div>
                <div class="row">&nbsp;</div>
                 <div class="row">
              <div class="text-center" style="padding-top:10px;"><button type="submit">Send data</button></div>
            </form></div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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