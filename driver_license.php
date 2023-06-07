<?php
$title="/Driver License";
require'include/header.php';
require_once 'db/conn.php';
?> 
<br/>
<br/>
<table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
<tr>
 <td align="center">
<h1 align="center"><span class="p1">Driver License</span></h1>
<form action="successdl.php" method="post">
 <div class="container p1">
 <label for="dl_id">Driver License ID</label>
 <input name="dl_id" type="number" placeholder="Enter Your Driver License ID"  required id="dl_id" />
 <label for="dl_no">Driver License Number</label>
 <input name="dl_no" type="number" placeholder="Enter Your Driver License Number" maxlength="50" required id="dl_no" />
 <label for="license_type">License Type</label>
 <input name="license_type" type="text" placeholder="Enter Your License Type" maxlength="50" required id="license_type" />
 <label for="issue_date">Issue Date</label>
 <input name="issue_date" type="date" placeholder="Enter the Issue Date"  required id="issue_date" />
 <label for="exp_date">Expiry Date</label>
 <input name="exp_date" type="date" placeholder="Enter the Vehicle Expiry Date"  required  id="exp_date" />
 <label for="issue_city">Issue City</label>
 <input name="issue_city" type="text" placeholder="Enter the Issued City" maxlength="50" required id="issue_city" />
 <label for="cus_id" align="center">cus_id</label>
 <input name="cus_id" type="number" placeholder="Enter the Customer ID"  required id="cus_id" />
 </div>
<button type="submit"  name="submit" >SAVE</button>
 </form>
 </td>
 </tr>
 </table>
 <br/>
 <a href="index.php"><button type="button">BACK HOME</button></a>
 <?php require'include/footer.php'?>