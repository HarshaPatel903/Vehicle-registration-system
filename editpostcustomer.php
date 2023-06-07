<?php 
    $title="/Success Edit";
    require_once 'db/conn.php';
	
	
    if(isset($_POST['submit'])){
		$cus_id = $_POST['cus_id'];
		$cus_name = $_POST['cus_name'];
		$cus_addres = $_POST['cus_addres'];
		$cus_email = $_POST['cus_email'];
		$cus_mobile = $_POST['cus_mobile'];
		$cus_dob = $_POST['cus_dob'];
		$issuccess = $crud->editcustomer($cus_id,$cus_name,$cus_addres,$cus_email,$cus_mobile,$cus_dob);
		if($issuccess){
			header("Location: viewcustomer.php");
		}
		else{
			echo 'Error Ocurred';
		}
	}

    

?>
