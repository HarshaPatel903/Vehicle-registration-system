<?php 
    $title="/Success";
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
		$issuccess = $crud->insertdriverlicense($dl_id,$dl_no,$license_type,$issue_date,$exp_date,$issue_city,$cus_id);
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
	