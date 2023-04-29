<?php
include_once('webconfig.php');

/*echo $sqlstatedata = "Insert into tbl_state set
state_name = '".$_POST['state-name']."',
state_status = '".$_POST['state-status']."'";*/


//$qrystatedata = mysqli_query($datab,$sqlstatedata);
//echo $_POST['action'];
if(isset($_POST['action']) && $_POST['action'] == 'getdistrict'){
	$qrylogdatastate = mysqli_query($link, "Select * from district_table where state_id = ".$_POST['dist']." and status = 'Active'",MYSQLI_USE_RESULT);
    $data ='<option value="">--District--</option>';
    while($rowsqldatastate = mysqli_fetch_assoc($qrylogdatastate)){ 
            $data .= '<option value="'.$rowsqldatastate['dist_id'].'">'.$rowsqldatastate['dist_name'].'</option>';
     }

	echo $data;
}else if(isset($_POST['action']) && $_POST['action'] == 'gethospital'){
	$qrylogdatastate = mysqli_query($link, "Select * from hospital_table where dist_id = ".$_POST['dist'],MYSQLI_USE_RESULT);
    $data ='<option value="">--Hospital--</option>';
    while($rowsqldatastate = mysqli_fetch_assoc($qrylogdatastate)){ 
            $data .= '<option value="'.$rowsqldatastate['hospital_id'].'">'.$rowsqldatastate['hospital_name'].'</option>';
     }

	echo $data;
}else if(isset($_POST['action']) && $_POST['action'] == 'getbedinfo'){
	$qrylogdatastate = mysqli_query($link, "Select * from bed_table where hospital_id = ".$_POST['hosp']." and bed_type = ".$_POST['bed'],MYSQLI_USE_RESULT);
    $rowsqldatastate = mysqli_fetch_assoc($qrylogdatastate);
	$data = '<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Total Bed:</a></h4>
			<p class="description">'.$rowsqldatastate['total_bed'].'</p>
             </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Available Bed:</a></h4>
			<p class="description">'.$rowsqldatastate['available_bed'].'</p>
            </div>';
	echo $data;
}
?>

		