<?php
include_once('webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:adminlogin.php");
	exit;
}
$qrylogdata = mysqli_query($link, "Select * from hospital_table ht, district_table dt where ht.dist_id = dt.dist_id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BI::Admin:Hospital</title>
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
          <h2>Hospital Data</h2>
          
        </div>

      </div>

      <div class="container" align="center">
		<?php if(!empty($_SESSION['message'])){?>
       	<div class="row"><font color="red"><strong><?php echo $_SESSION['message']; ?></strong></font></div>
         <?php $_SESSION['message'] = ''; } ?>
        <div class="row mt-5">

           <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
           
  <thead>
  <tr>
      <td colspan="6" align="right"><a href="hospitalform.php" class="appointment-btn scrollto">
      <span class="d-none d-md-inline">Add Hospital</span></a>
      </td>
    </tr>
    <tr>
      <th class="th-sm">District</th>
      <th class="th-sm">Name</th>
		<th class="th-sm">Address</th>
		<th class="th-sm">Contact</th>
      <th class="th-sm">Type</th>
      <th class="th-sm" colspan="2" align="center">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($rowsqldata = mysqli_fetch_assoc($qrylogdata)){?>
    <tr>
      <td><?php echo $rowsqldata['dist_name'];?></td>
      <td><?php echo $rowsqldata['hospital_name'];?></td>
      <td><?php echo $rowsqldata['address'];?></td>
		<td><?php echo $rowsqldata['contact_no'];?></td>
		<td><?php echo $rowsqldata['type'];?></td>
      <td><div class="btn-wrap"><a href="hospitalformedit.php?id=<?php echo $rowsqldata['hospital_id']; ?>" class="btn-buy">EDIT</a></div></td>
      <td><div class="btn-wrap"><a href="data/hospitaldata-sql.php?id=<?php echo $rowsqldata['hospital_id'];?>&action=hospitaldel" class="btn-buy">DEL</a></div></td>
    </tr>
  <?php } ?>
      
  </tfoot>
</table>
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
 <script>
// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>
</body>

</html>