<?php 
    $title="/Success Edit";
    require_once 'include/header.php'; 
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
		$dl_id = $_POST['dl_id'];
		$dl_no = $_POST['dl_no'];
		$license_type = $_POST['license_type'];
		$issue_date = $_POST['issue_date'];
		$exp_date = $_POST['exp_date'];
		$issue_city = $_POST['issue_city'];
		$cus_id = $_POST['cus_id'];
		$issuccess = $crud->editdl($dl_id,$dl_no,$license_type,$issue_date,$exp_date,$issue_city,$cus_id);
		if($issuccess){
			header("Location: viewdl.php");
		}
		else{
			echo 'Error Ocurred';
		}
	}
?>