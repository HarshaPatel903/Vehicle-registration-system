<?php
    $title = '/View Customer'; 

    require_once 'include/admin_header.php';
    require_once 'db/conn.php'; 

    // Get all customer
    $results = $crud->getdl();
?>
<br/>
<br/>
<br/>

    <table width="100%" cellspacing="10px" align="center" style="border-collapse: collapse;">
        <tr>
            <th style="text-align: left;padding: 8px;">Driver License ID</th>
            <th style="text-align: left;padding: 8px;">Driver License Number</th>
            <th style="text-align: left;padding: 8px;">License Type</th>
            <th style="text-align: left;padding: 8px;">Issue Date</th>
            <th style="text-align: left;padding: 8px;">Expiry Date</th>
            <th style="text-align: left;padding: 8px;">Issue City</th>
            <th style="text-align: left;padding: 8px;">Customer ID</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td style="text-align: left;padding: 8px;"><?php echo $r['dl_id'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['dl_no'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['license_type'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['issue_date'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['exp_date'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['issue_city'] ?></td>
                <td style="text-align: left;padding: 8px;"><?php echo $r['cus_id'] ?></td>
                <td style="text-align: left;padding: 8px;">
                    <a onclick="return confirm('Are you sure you want to EDIT this DL?');" href="editdl.php?id=<?php echo $r['dl_id'] ?>"><button class="abutton">EDIT</button></a>
                    <a onclick="return confirm('Are you sure you want to DELETE this DL?');" href="deletedl.php?id=<?php echo $r['dl_id'] ?>"><button class="abutton">DELETE</button></a>
                </td>
           </tr> 
        <?php }?>
    </table>
<br/>
<br/>
<?php require'include/footer.php'?>	