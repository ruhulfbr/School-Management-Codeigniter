<table>
    <tr>
        <th>S/L</th>
       
        <th>Photo</th>
        <th>Action</th>
    </tr>
    <?php 
    $i=1;
    
    foreach ($result as $info){ ?>
    <tr>
        <td><?php echo $i++; ?></td> 
        
        <td><img src="<?php echo base_url().$info->photo_name; ?>" width="80px" height="80px"></td> 
        <td>
            <a href="<?php echo base_url(); ?>photos/photos_delete/<?php echo $info->album_id; ?>/<?php echo $info->photo_id; ?>"><button style="padding: 5px; width: 80px;">Delete</button></a>
        </td>
    </tr>
    
    <?php } ?>
</table>