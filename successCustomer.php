<?php 
    $title="/Success";
    require_once 'include/header.php'; 
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
		$cus_id = $_POST['cus_id'];
		$cus_name = $_POST['cus_name'];
		$cus_addres = $_POST['cus_addres'];
		$cus_email = $_POST['cus_email'];
		$cus_mobile = $_POST['cus_mobile'];
		$cus_dob = $_POST['cus_dob'];
		$issuccess = $crud->insertCustomer($cus_id,$cus_name,$cus_addres,$cus_email,$cus_mobile,$cus_dob);
		if($issuccess){
			echo '<h1 style="color:#04aa6D;" align="center"><span class="p1">Your Detailes has been saved successfull</span></h1>';
		}
		else{
			echo 'Error Ocurred';
		}
	}
?>
	<br/>
	<br/>
	<p align="center"><span class="p1" class="text">
	Thank You For Your Time.<br/>
	</p>
	<br/>
	<a href="index.php"><button type="button">BACK HOME</button></a>
	<?php require'include/footer.php'?>
	