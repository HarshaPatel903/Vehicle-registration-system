<?php
    $title = '/View BookingDetails'; 

    require_once 'include/admin_header.php';
    require_once 'db/conn.php'; 

    $results = $crud->getlogs();
?>
<br/>
<br/>
<br/>

    <table width="100%" cellspacing="10px" align="center" style="border-collapse: collapse;">
        <tr>
            <th style="text-align: center;padding: 8px;">Log ID</th>
            <th style="text-align: center;padding: 8px;">Booking ID</th>
            <th style="text-align: center;padding: 8px;">Action</th>
            <th style="text-align: center;padding: 8px;">DateTime</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td style="text-align: center;padding: 8px;"><?php echo $r['log_id'] ?></td>
                <td style="text-align: center;padding: 8px;"><?php echo $r['booking_id'] ?></td>
                <td style="text-align: center;padding: 8px;"><?php echo $r['action'] ?></td>
                <td style="text-align: center;padding: 8px;"><?php echo $r['cdate'] ?></td>
           </tr> 
        <?php }?>
    </table>
<br/>
<br/>
<?php require'include/footer.php'?>	