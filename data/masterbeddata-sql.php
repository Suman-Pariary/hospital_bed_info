<?php
include_once('../webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:../adminlogin.php");
	exit;
}
/*echo $sqlmasterbeddata = "Insert into tbl_master_bed_type set
bed-type = '".$_POST['bed-type']."',
bed-status = '".$_POST['bed-status']."'";*/


//$qrymasterbeddata = mysqli_query($datab,$sqlmasterbeddata);
if(isset($_POST['action']) && $_POST['action'] == 'masterbedinsert'){

	$qrymasterbeddata = mysqli_query($link, "Insert into master_bed_type set bed_type = '".$_POST['bed_type']."', 
	bed_status = '".$_POST['bed_status']."'", MYSQLI_USE_RESULT);
	
	if($qrymasterbeddata){
		$_SESSION['message'] = 'Data Inserted';
		header("location:../masterbedmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to insert data.';
		header("location:../masterbedmaster.php");
		exit;
	}
}else if(isset($_POST['action']) && $_POST['action'] == 'masterbededit'){
	$qrymasterbeddata = mysqli_query($link, "UPDATE master_bed_type set 
	bed_type = '".$_POST['bed_type']."', 
	bed_status = '".$_POST['bed_status']."' WHERE bed_id =".$_POST['bedid'], MYSQLI_USE_RESULT);
	
	if($qrymasterbeddata){
		$_SESSION['message'] = 'Data Updated';
		header("location:../masterbedmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to update data.';
		header("location:../masterbedmaster.php");
		exit;
	}
}else if(isset($_GET['action']) && $_GET['action'] == 'masterbeddel'){
	$qrymasterbeddata = mysqli_query($link, "DELETE FROM master_bed_type WHERE bed_id =".$_GET['id'], MYSQLI_USE_RESULT);
	
	if($qrymasterbeddata){
		$_SESSION['message'] = 'Data Deleted Successfully.';
		header("location:../masterbedmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to delete data.';
		header("location:../masterbedmaster.php");
		exit;
	}
}
?>

