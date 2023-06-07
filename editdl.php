<?php
$title="/Driver License";
require'include/admin_header.php';
require_once 'db/conn.php';

if(!isset($_GET['id']))
    {
        echo 'error';
        header("Location: viewdl.php");
    }
    else{
        $id = $_GET['id'];
        $dl = $crud->getdldetails($id);
	}
?> 
<br/>
<br/>
<table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
<tr>
 <td align="center">
<h1 align="center"><span class="p1">Edit Driver License</span></h1>
<form action="editpostdl.php" method="post">
 <div class="container p1">
 <label for="dl_id">Driver License ID</label>
 <input name="dl_id" type="number" value="<?php echo $dl['dl_id'] ?>"  required id="dl_id" />
 <label for="dl_no">Driver License Number</label>
 <input name="dl_no" type="number" value="<?php echo $dl['dl_no'] ?>" maxlength="50" required id="dl_no" />
 <label for="license_type">License Type</label>
 <input name="license_type" type="text" value="<?php echo $dl['license_type'] ?>" maxlength="50" required id="license_type" />
 <label for="issue_date">Issue Date</label>
 <input name="issue_date" type="date" value="<?php echo $dl['issue_date'] ?>"  required id="issue_date" />
 <label for="exp_date">Expiry Date</label>
 <input name="exp_date" type="date" value="<?php echo $dl['exp_date'] ?>" required  id="exp_date" />
 <label for="issue_city">Issue City</label>
 <input name="issue_city" type="text" value="<?php echo $dl['issue_city'] ?>"maxlength="50" required id="issue_city" />
 <label for="cus_id" align="center">cus_id</label>
 <input name="cus_id" type="number" value="<?php echo $dl['cus_id'] ?>"required id="cus_id" />
 </div>
<button type="submit"  name="submit" class="bbutton">SAVE CHANGES</button>
 </form>
 </td>
 </tr>
 </table>
 <br/>
 <?php require'include/footer.php'?>