<?php
    $title = '/View Customer'; 

    require_once 'include/admin_header.php';
    require_once 'db/conn.php'; 

    // Get all customer
    $results = $crud->getcustomer();
?>
<br/>
<br/>
<br/>

    <table width="100%" cellspacing="10px" align="center" style="border-collapse: collapse;">
        <tr>
            <th style="text-align: left;padding: 8px;">Customer ID</th>
            <th style="text-align: left;padding: 8px;">Customer Name</th>
            <th style="text-align: left;padding: 8px;">Customer Address</th>
            <th style="text-align: left;padding: 8px;">Customer Email</th>
            <th style="text-align: left;padding: 8px;">Contact Number</th>
            <th style="text-align: left;padding: 8px;">Date of Birth</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_id'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_name'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_addres'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_email'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_mobile'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_dob'] ?></td>
                <td style="text-align: left;padding: 8px;">
                    <a onclick="return confirm('Are you sure you want to EDIT this customer?');" href="editcustomer.php?id=<?php echo $r['cus_id'] ?>"><button class="abutton">EDIT</button></a>
                </td>
           </tr> 
        <?php }?>
    </table>
<br/>
<br/>
<?php require'include/footer.php'?>	