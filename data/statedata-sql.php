<?php
include_once('../webconfig.php');
if(empty($_SESSION['adminUser'])){
	header("location:../adminlogin.php");
	exit;
}
/*echo $sqlstatedata = "Insert into tbl_state set
state_name = '".$_POST['state-name']."',
state_status = '".$_POST['state-status']."'";*/


//$qrystatedata = mysqli_query($datab,$sqlstatedata);
if(isset($_POST['action']) && $_POST['action'] == 'stateinsert'){
	$qrystatedata = mysqli_query($link, "Insert into state_table set state_name = '".$_POST['state_name']."', 
	state_status = '".$_POST['state_status']."'", MYSQLI_USE_RESULT);
	
	if($qrystatedata){
		$_SESSION['message'] = 'Data Inserted';
		header("location:../statemaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to insert data.';
		header("location:../statemaster.php");
		exit;
	}
}else if(isset($_POST['action']) && $_POST['action'] == 'stateedit'){
	$qrystatedata = mysqli_query($link, "UPDATE state_table set 
	state_name = '".$_POST['state_name']."', 
	state_status = '".$_POST['state_status']."' WHERE state_id =".$_POST['stateid'], MYSQLI_USE_RESULT);
	
	if($qrystatedata){
		$_SESSION['message'] = 'Data Updated';
		header("location:../statemaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to update data.';
		header("location:../statemaster.php");
		exit;
	}
}else if(isset($_GET['action']) && $_GET['action'] == 'statedel'){
	$qrystatedata = mysqli_query($link, "DELETE FROM state_table WHERE state_id =".$_GET['id'], MYSQLI_USE_RESULT);
	
	if($qrystatedata){
		$_SESSION['message'] = 'Data Deleted Successfully.';
		header("location:../statemaster.php");
		exit;
	}else{
	
		$_SESSION['message'] = 'Failed to delete data.';
		header("location:../statemaster.php");
		exit;
	}
}
?>

