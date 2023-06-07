<?php
    require_once 'db/conn.php';
	
    if(!isset($_GET['id']))
	{
		echo 'Error Ocurred';
        header("Location: viewvehicle.php");
    }
	else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deletevehicle($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewvehicle.php");
        }
        else{
			echo 'Error Ocurred';
            
        }
    }

?>