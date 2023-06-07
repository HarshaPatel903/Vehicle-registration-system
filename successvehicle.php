<?php 
    $title="/Success";
    require_once 'include/header.php'; 
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
		$veh_id = $_POST['veh_id'];
		$veh_num = $_POST['veh_num'];
		$veh_type = $_POST['veh_type'];
		$chechis = $_POST['chechis'];
		$engine_no = $_POST['engine_no'];
		$veh_desc = $_POST['veh_desc'];
		$cus_id = $_POST['cus_id'];
		$issuccess = $crud->insertvehicle($veh_id,$veh_num,$veh_type,$chechis,$engine_no,$veh_desc,$cus_id);
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
	