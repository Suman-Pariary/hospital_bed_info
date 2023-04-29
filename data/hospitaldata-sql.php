<?php
include_once('../webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:../adminlogin.php");
	exit;
}
/*echo $sqlhospitaldata = "Insert into tbl_hospital set
hospital-name = '".$_POST['hospital-name']."',
address = '".$_POST['address']."',
contact-no = '".$_POST['contact-no']."',
type = '".$_POST['type']."'";*/


//$qryhospitaldata = mysqli_query($datab,$sqlhospitaldata);
if(isset($_POST['action']) && $_POST['action'] == 'hospitalinsert'){

	$qryhospitaldata = mysqli_query($link, "Insert into hospital_table set dist_id = '".$_POST['dist_id']."', hospital_name = '".$_POST['hospital_name']."', 
	address = '".$_POST['address']."',contact_no = '".$_POST['contact_no']."',type = '".$_POST['type']."'", MYSQLI_USE_RESULT);
	
	if($qryhospitaldata){
		$_SESSION['message'] = 'Data Inserted';
		header("location:../hospitalmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to insert data.';
		header("location:../hospitalmaster.php");
		exit;
	}
}else if(isset($_POST['action']) && $_POST['action'] == 'hospitaledit'){
	$qryhospitaldata = mysqli_query($link, "UPDATE hospital_table set 
	 dist_id = '".$_POST['dist_id']."', 
	hospital_name = '".$_POST['hospital_name']."', 
	address = '".$_POST['address']."',contact_no = '".$_POST['contact_no']."',
	type = '".$_POST['type']."' WHERE hospital_id =".$_POST['hospitalid'], MYSQLI_USE_RESULT);
	
	if($qryhospitaldata){
		$_SESSION['message'] = 'Data Updated';
		header("location:../hospitalmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to update data.';
		header("location:../hospitalmaster.php");
		exit;
	}
}else if(isset($_GET['action']) && $_GET['action'] == 'hospitaldel'){
	$qrystatedata = mysqli_query($link, "DELETE FROM hospital_table WHERE hospital_id =".$_GET['id'], MYSQLI_USE_RESULT);
	
	if($qrystatedata){
		$_SESSION['message'] = 'Data Deleted Successfully.';
		header("location:../hospitalmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to delete data.';
		header("location:../hospitalmaster.php");
		exit;
	}
}
?>

