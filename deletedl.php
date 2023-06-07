<?php
    require_once 'db/conn.php';
	
    if(!isset($_GET['id']))
	{
		echo 'Error Ocurred';
        header("Location: viewdl.php");
    }
	else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deletedl($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewdl.php");
        }
        else{
			echo 'Error Ocurred';
            
        }
    }

?>