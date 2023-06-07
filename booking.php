<?php
$title="/Bookings";
require'include/header.php';
require_once 'db/conn.php';
?> 
<br/>
<br/>
<table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
<tr>
<td align="center">
<h1 align="center"><span class="p1">Booking Details</span></h1>
<form action="successbooking.php" method="post">
 <div class="container p1">
 <label for="booking_id">Booking ID</label>
 <input name="booking_id" type="number" placeholder="Enter Your Booking ID"  required id="booking_id" />
 <label for="reg_fee">Registration Fee status</label>
 <input name="reg_fee" type="text" placeholder="Fee status PAID or NOT PAID" maxlength="50" required id="reg_fee" />
 <label for="temp_no">Temporary Registration Number</label>
 <input name="temp_no" type="text" placeholder="Enter Temporary Registration Number Given By Showroom" maxlength="50" required id="temp_no" />
 <label for="cus_id">Customer ID</label>
 <input name="cus_id" type="number" placeholder="Enter the Customer ID" required id="cus_id" />
 </div>
<button type="submit"  name="submit" >SAVE</button>
 </form>
 </td>
 </tr>
 </table>
 <br/>
 <a href="index.php"><button type="button">BACK HOME</button></a>
 <?php require'include/footer.php'?>