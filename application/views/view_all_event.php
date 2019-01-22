
<div class="tabs box">
    <ul>
     
 <li><a href="#tab01"><span>View All Event</span></a></li>
 </ul>
</div> <!-- /tabs -->
<!-- Tab01 -->
<div id="tab01">
    <?php
    if ($this->session->userdata('msg')) {
        echo $this->session->userdata('msg');
        $this->session->unset_userdata('msg');
    }
    ?>

    <div class="module-table-body">
       
        <form action="">
            <table class="tablesorter" width="980">
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Events Date</th>
                        <th>Events Hading</th>
                        <th>Events</th>
                        <th>Photo</th>
                                                
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($result as $rules_info) {
                        ?>
                        <tr<?php $count % 2 == 0 ? 'class="bg"' : ''; ?>>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $rules_info->event_date; ?></td>
                            <td><?php echo $rules_info->event_hading; ?></td>
                            <td><?php echo $rules_info->event; ?></td>
                            <td><img src="<?php echo base_url().$rules_info->event_photo; ?>" width="80px" height="80px"></td>
                            <td>
                            
                               <a href="<?php echo base_url(); ?>index.php/studentController/delete_event/<?php echo $rules_info->event_id ; ?>" style="padding: 5px; border: 1px #661346 solid; background-color: red; color: white; text-decoration: none; margin: 5px">
   delete
                                </a>
                                
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </form>
     
     
    </div> <!-- End .module-table-body -->
</div> <!-- /tab01 -->
