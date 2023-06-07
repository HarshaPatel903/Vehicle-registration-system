<?php
$title="/Edit Customer";
require_once 'include/admin_header.php';
require_once 'db/conn.php';

    if(!isset($_GET['id']))
    {
        echo 'error';
        header("Location: viewcustomer.php");
    }
    else{
        $id = $_GET['id'];
        $customer = $crud->getcustomerdetails($id);
	}
?> 
<br/>
<br/>
<table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
<tr>
<td align="center">
<h1 align="center"><span class="p1"> Edit Customer Details</span></h1>
<form action="editpostcustomer.php" method="post">
 <div class="container p1">
 <label for="cus_id">Customer ID</label>
 <input name="cus_id" type="number" value="<?php echo $customer['cus_id'] ?>" maxlength="50" required id="cus_id" />
 <label for="cus_name">Customer Name</label>
 <input name="cus_name" type="text" value="<?php echo $customer['cus_name'] ?>" maxlength="50" required id="cus_name" />
 <label for="cus_addres">Customer Address</label>
 <input name="cus_addres" type="text" value="<?php echo $customer['cus_addres'] ?>" maxlength="50" required id="cus_addres" />
 <label for="cus_email">Customer Email</label>
 <input name="cus_email" type="text" value="<?php echo $customer['cus_email'] ?>" maxlength="50" required  id="cus_email" />
 <label for="cus_mobile">Contact Number</label>
 <input name="cus_mobile" type="text" value="<?php echo $customer['cus_mobile'] ?>" maxlength="11" required id="cus_mobile" />
 <label for="cus_dob">Date of Birth</label>
 <input name="cus_dob" type="date" value="<?php echo $customer['cus_dob'] ?>" required id="cus_dob" />
 </div>
<button type="submit"  name="submit"  class="bbutton">SAVE CHANGES</button>
 </form>
 </td>
 </tr>
 </table>
 <br/>
 <br/>
 <?php require'include/footer.php'?>