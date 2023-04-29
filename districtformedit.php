<?php
include_once('webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:adminlogin.php");
	exit;
}
//echo "Select * from district_table where dist_id =".$_GET['id'];exit;
$qrylogdata = mysqli_query($link, "Select * from district_table where dist_id =".$_GET['id']);
$rowsqldata = mysqli_fetch_assoc($qrylogdata);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BI::Admin:District</title>
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
          <h2>District Data</h2>
          
        </div>

      </div>

      <div class="container" align="center">
		<?php if(!empty($_SESSION['message'])){?>
       	<div class="row"><font color="red"><strong><?php echo $_SESSION['message']; ?></strong></font></div>
         <?php $_SESSION['message'] = ''; } ?>
        <div class="row mt-5">

            <div class="col-lg-6" >
            <form action="data/districtdata-sql.php" method="post" role="form" class="php-email-form1">
            <input type="hidden" name="distid" value="<?php echo $_GET['id'];?>">
            <input type="hidden" name="action" value="districtedit">
				
              <div class="row">
				  <div class="col form-group">
					  <select name="state-id" id="state-id" class="form-control" required>
						  <option value="">--State--</option>
						  <?php
						  $qrylogdata1 = mysqli_query($link, "Select * from state_table where state_status='Active'");
						  while($rowsqldata1 = mysqli_fetch_assoc($qrylogdata1)){ 
						  ?>
						  <option value="<?php echo $rowsqldata1['state_id'];?>"  <?php if($rowsqldata['state_id'] == $rowsqldata1['state_id']) echo 'selected';?>><?php echo $rowsqldata1['state_name'];?></option>
						  <?php } ?>
					  </select>
                  
                </div>
				  
                <div class="col form-group">
                  <input type="text" name="dist_name" class="form-control" id="dist_name" placeholder="District Name" required value="<?php echo $rowsqldata['dist_name'];?>">
                </div>
                <div class="col form-group">
					<select name="status" id="status" required class="form-control">
                    	<option value="">--Status--</option>
						<option value="Active" <?php if($rowsqldata['status'] == 'Active') echo 'selected';?>>Active</option>
						<option value="Inactive" <?php if($rowsqldata['status'] == 'Inactive') echo 'selected';?>>Inactive</option>
					</select>
                </div>
              
              
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