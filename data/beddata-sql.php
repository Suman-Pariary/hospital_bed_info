<?php
include_once('../webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:../adminlogin.php");
	exit;
}
/*echo $sqlbeddata = "Insert into tbl_bed set
total-bed = '".$_POST['total-bed']."',
available-bed = '".$_POST['available-bed']."'";*/


//$qrybeddata = mysqli_query($datab,$sqlbeddata);
if(isset($_POST['action']) && $_POST['action'] == 'bedinsert'){
	$qrybeddata = mysqli_query($link, "Insert into bed_table set 
	hospital_id = '".$_POST['hospital_id']."', 
	bed_type = '".$_POST['bed_type']."', 
	total_bed = '".$_POST['total_bed']."', 
	available_bed = '".$_POST['available_bed']."',
	entertime = NOW()", MYSQLI_USE_RESULT);
	
	if($qrybeddata){
		$_SESSION['message'] = 'Data Inserted';
		header("location:../bedmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to insert data.';
		header("location:../bedmaster.php");
		exit;
	}
}else if(isset($_POST['action']) && $_POST['action'] == 'bededit'){
	$qrybeddata = mysqli_query($link, "UPDATE bed_table set 
	hospital_id = '".$_POST['hospital_id']."', 
	bed_type = '".$_POST['bed_type']."', 
	total_bed = '".$_POST['total_bed']."', 
	available_bed = '".$_POST['available_bed']."',
	entertime = NOW() WHERE info_id =".$_POST['infoid'], MYSQLI_USE_RESULT);
	
	if($qrybeddata){
		$_SESSION['message'] = 'Data Updated';
		header("location:../bedmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to update data.';
		header("location:../bedmaster.php");
		exit;
	}
}else if(isset($_GET['action']) && $_GET['action'] == 'beddel'){
	$qrybeddata = mysqli_query($link, "DELETE FROM bed_table WHERE info_id =".$_GET['id'], MYSQLI_USE_RESULT);
	
	if($qrybeddata){
		$_SESSION['message'] = 'Data Deleted Successfully.';
		header("location:../bedmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to delete data.';
		header("location:../bedmaster.php");
		exit;
	}
}
?>

