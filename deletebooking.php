<?php
    require_once 'db/conn.php';
	
    if(!isset($_GET['id']))
	{
		echo 'Error Ocurred';
        header("Location: viewbooking.php");
    }
	else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deletebooking($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewbooking.php");
        }
        else{
			echo 'Error Ocurred';
            
        }
    }

?>