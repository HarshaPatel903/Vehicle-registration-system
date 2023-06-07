<?php
$title="/Vehicle";
require'include/admin_header.php';
require_once 'db/conn.php';

if(!isset($_GET['id']))
    {
        echo 'error';
        header("Location: viewvehicle.php");
    }
    else{
        $id = $_GET['id'];
        $vehicle = $crud->getvehicledetails($id);
	}
?> 
<br/>
<br/>
<table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
<tr>
<td align="center">
<h1 align="center"><span class="p1">Edit Vehicle Details</span></h1>
<form action="editpostvehicle.php" method="post">
 <div class="container p1">
 <label for="veh_id">Vehicle ID</label>
 <input name="veh_id" type="number" value="<?php echo $vehicle['veh_id'] ?>" maxlength="50" required id="veh_id" />
 <label for="veh_num">Vehicle Number</label>
 <input name="veh_num" type="text" value="<?php echo $vehicle['veh_num'] ?>" maxlength="50" required id="veh_num" />
 <label for="veh_type">Vehicle Type</label>
 <input name="veh_type" type="text" value="<?php echo $vehicle['veh_type'] ?>" maxlength="50" required id="veh_type" />
 <label for="chechis">Chechis Number</label>
 <input name="chechis" type="text" value="<?php echo $vehicle['chechis'] ?>" maxlength="50" required  id="chechis" />
 <label for="engine_no">Engine Number</label>
 <input name="engine_no" type="text" value="<?php echo $vehicle['engine_no'] ?>" maxlength="11" required id="engine_no" />
 <label for="veh_desc">Vehicle Description</label><br/>
 <input name="veh_desc" type="text" value="<?php echo $vehicle['veh_desc'] ?>" maxlength="150" required id="veh_desc" />
 <label for="cus_id">cus_id</label>
 <input name="cus_id" type="number" value="<?php echo $vehicle['cus_id'] ?>" maxlength="11" required id="cus_id" />
 </div>
<button type="submit"  name="submit" class="bbutton">SAVE CHANGES</button>
 </form>
 </td>
 </tr>
 </table>
 <br/>
 <?php require'include/footer.php'?>