<?php 
    $title="/Success";
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
		$booking_id = $_POST['booking_id'];
		$reg_fee = $_POST['reg_fee'];
		$temp_no = $_POST['temp_no'];
		$cus_id = $_POST['cus_id'];
		$status = $_POST['status'];
		$pamveh_no = $_POST['pamveh_no'];
		$issuccess = $crud->editbooking($booking_id,$reg_fee,$temp_no,$cus_id,$status,$pamveh_no);
		if($issuccess){
			header("Location: viewbooking.php");
		}
		else{
			echo 'Error Ocurred';
		}
	}
?>
	