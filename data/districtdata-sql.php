<?php
include_once('../webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:../adminlogin.php");
	exit;
}
/*echo $sqldistrictdata = "Insert into tbl_district set
dist-name = '".$_POST['dist-name']."',
status = '".$_POST['status']."'";*/


//$qrydistrictdata = mysqli_query($datab,$sqldistrictdata);
if(isset($_POST['action']) && $_POST['action'] == 'districtinsert'){
	/*echo "Insert into district_table set state_id = '".$_POST['state-id']."', dist_name = '".$_POST['district_name']."', 
	status = '".$_POST['status']."'";
	exit;*/
	$qrydistrictdata = mysqli_query($link, "Insert into district_table set state_id = '".$_POST['state-id']."', dist_name = '".$_POST['district_name']."', 
	status = '".$_POST['status']."'", MYSQLI_USE_RESULT);
	
	if($qrydistrictdata){
		$_SESSION['message'] = 'Data Inserted';
		header("location:../districtmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to insert data.';
		header("location:../districtmaster.php");
		exit;
	}
}else if(isset($_POST['action']) && $_POST['action'] == 'districtedit'){
	$qrydistrictdata = mysqli_query($link, "UPDATE district_table set 
	state_id = '".$_POST['state-id']."',
	dist_name = '".$_POST['dist_name']."', 
	status = '".$_POST['status']."' WHERE dist_id =".$_POST['distid'], MYSQLI_USE_RESULT);
	
	if($qrydistrictdata){
		$_SESSION['message'] = 'Data Updated';
		header("location:../districtmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to update data.';
		header("location:../districtmaster.php");
		exit;
	}
}else if(isset($_GET['action']) && $_GET['action'] == 'districtdel'){
	$qrydistrictdata = mysqli_query($link, "DELETE FROM district_table WHERE dist_id =".$_GET['id'], MYSQLI_USE_RESULT);
	
	if($qrydistrictdata){
		$_SESSION['message'] = 'Data Deleted Successfully.';
		header("location:../districtmaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to delete data.';
		header("location:../districtmaster.php");
		exit;
	}
}
?>

