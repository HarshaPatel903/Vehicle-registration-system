<?php
    $title = '/View Booking'; 

    require_once 'include/admin_header.php';
    require_once 'db/conn.php'; 

    $results = $crud->getbooking();
?>
<br/>
<br/>
<br/>

    <table width="100%" cellspacing="10px" align="center" style="border-collapse: collapse;">
        <tr>
            <th style="text-align: left;padding: 8px;">Booking ID</th>
            <th style="text-align: left;padding: 8px;">Registration Fee status</th>
            <th style="text-align: left;padding: 8px;">Temporary Registration Number</th>
            <th style="text-align: left;padding: 8px;">Customer ID</th>
            <th style="text-align: left;padding: 8px;">STATUS</th>
            <th style="text-align: left;padding: 8px;">Parmanent Vehicle Number</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td style="text-align: left;padding: 8px;"><?php echo $r['booking_id'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['reg_fee'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['temp_no'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_id'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['status'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['pamveh_no'] ?></td>
                <td style="text-align: left;padding: 8px;">
                    <a onclick="return confirm('Are you sure you want to EDIT this booking?');" href="editbooking.php?id=<?php echo $r['booking_id'] ?>"><button class="abutton">EDIT</button></a>
                    <a onclick="return confirm('Are you sure you want to DELETE this booking?');" href="deletebooking.php?id=<?php echo $r['booking_id'] ?>"><button class="abutton">DELETE</button></a>
                </td>
           </tr> 
        <?php }?>
    </table>
<br/>
<br/>
<?php require'include/footer.php'?>	